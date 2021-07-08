<?php

namespace BackerClub\IndiegogoApiClient\Tests;

use BackerClub\IndiegogoApiClient\Response\CampaignsResponse;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class SearchTest extends ClientTestCase
{
    public function testSearchRequestReturnsCampaignsResponseResult()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/search.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $campaignsResponse = $indiegogo->search();

        $this->assertInstanceOf(CampaignsResponse::class, $campaignsResponse);
    }
}
