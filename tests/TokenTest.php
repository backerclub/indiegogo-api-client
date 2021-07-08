<?php

namespace BackerClub\IndiegogoApiClient\Tests;

use BackerClub\IndiegogoApiClient\Entity\Token;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class TokenTest extends ClientTestCase
{
    public function testTokenRequestReturnsTokenObject()
    {
        // Setup response to a successful access token request.
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/token.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        // Given a successful access token response.
        $token = $indiegogo->tokenRequest();

        // We expect a Token object in response.
        $this->assertInstanceOf(Token::class, $token);
    }
}
