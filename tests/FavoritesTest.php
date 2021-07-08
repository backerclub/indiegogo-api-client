<?php

namespace BackerClub\IndiegogoApiClient\Tests;

use BackerClub\IndiegogoApiClient\Response\CampaignsResponse;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class FavoritesTest extends ClientTestCase
{
    public function testFavoritesRequestReturnsCampaignsResponseObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/favorites.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $favoritesResponse = $indiegogo->favorites();

        $this->assertInstanceOf(CampaignsResponse::class, $favoritesResponse);
    }
}
