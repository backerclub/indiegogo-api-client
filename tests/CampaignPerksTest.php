<?php

namespace BackerClub\IndiegogoApiClient\Tests;

use BackerClub\IndiegogoApiClient\Response\CampaignPerksResponse;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class CampaignPerksTest extends ClientTestCase
{
    public function testCampaignPerksRequestReturnsCampaignPerksresponseObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/campaign_perks.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $campaignPerksResponse = $indiegogo->campaignPerks(12345);

        $this->assertInstanceOf(CampaignPerksResponse::class, $campaignPerksResponse);
    }

    public function testLabelIsProperlyHydrated()
    {
        $campaignPerksResponseJson = json_decode(file_get_contents(__DIR__ . '/fixtures/campaign_perks.json'));
        $campaignPerksResponse     = new CampaignPerksResponse($campaignPerksResponseJson);
        $campaignPerks             = $campaignPerksResponse->getResponse();

        foreach ($campaignPerks as $key => $campaignPerk) {
            $this->assertSame(
                $campaignPerksResponseJson->response[$key]->label,
                $campaignPerk->getLabel()
            );
        }
    }

    public function testHasLimitedAvailability()
    {
        $campaignPerksResponseJson = json_decode(file_get_contents(__DIR__ . '/fixtures/campaign_perks.json'));
        $campaignPerksResponse     = new CampaignPerksResponse($campaignPerksResponseJson);
        $campaignPerks             = $campaignPerksResponse->getResponse();

        // We know the fixture for the first perk has unlimited availability.
        $this->assertFalse($campaignPerks[0]->hasLimitedAvailability());

        // and the second perk fixture has limited availability.
        $this->assertTrue($campaignPerks[1]->hasLimitedAvailability());
    }
}
