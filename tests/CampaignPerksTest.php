<?php
namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class CampaignPerksTest extends ClientTestCase
{
    public function test_campaign_perks_request_returns_campaignPerksresponse_object()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/campaign_perks.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $campaignPerksResponse = $indiegogo->campaignPerks(12345);

        $this->assertInstanceOf(\Indiegogo\Response\CampaignPerksResponse::class, $campaignPerksResponse);
    }

}