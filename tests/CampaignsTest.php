<?php

namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class CampaignsTest extends ClientTestCase
{
    public function testCampaignsRequestReturnsCampaignsResponseObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/campaigns.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $campaignsResponse = $indiegogo->campaigns();

        $this->assertInstanceOf(\Indiegogo\Response\CampaignsResponse::class, $campaignsResponse);
    }
}
