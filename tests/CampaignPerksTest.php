<?php

namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Indiegogo\Response\CampaignPerksResponse;

class CampaignPerksTest extends ClientTestCase
{
    public function testCampaignPerksRequestReturnsCampaignPerksresponseObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/campaign_perks.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $campaignPerksResponse = $indiegogo->campaignPerks(12345);

        $this->assertInstanceOf(\Indiegogo\Response\CampaignPerksResponse::class, $campaignPerksResponse);
    }

    public function testLabelIsProperlyHydrated()
    {
        $campaignPerksResponseJson = json_decode(file_get_contents(__DIR__ . '/fixtures/campaign_perks.json'));
        $campaignPerksResponse = new CampaignPerksResponse($campaignPerksResponseJson);
        $campaignPerks = $campaignPerksResponse->getResponse();

        foreach ($campaignPerks as $key => $campaignPerk) {
            $this->assertSame(
                $campaignPerksResponseJson->response[$key]->label,
                $campaignPerk->getLabel()
            );
        }
    }
}
