<?php

namespace BackerClub\IndiegogoApiClient\Tests;

use BackerClub\IndiegogoApiClient\Response\CampaignsResponse;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class RecommendationsTest extends ClientTestCase
{
    public function testRecommendationsRequestReturnsCampaignsResponseObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/recommendations.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $recommendationsResponse = $indiegogo->recommendations();

        $this->assertInstanceOf(CampaignsResponse::class, $recommendationsResponse);
    }
}
