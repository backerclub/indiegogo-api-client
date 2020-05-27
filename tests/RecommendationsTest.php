<?php

namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class RecommendationsTest extends ClientTestCase
{
    public function test_recommendations_request_returns_campaignsResponse_object()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/recommendations.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $recommendationsResponse = $indiegogo->recommendations();

        $this->assertInstanceOf(\Indiegogo\Response\CampaignsResponse::class, $recommendationsResponse);
    }

}