<?php
namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Indiegogo\Entity\Token;

class TokenTest extends ClientTestCase
{
    public function test_token_request_returns_token_object()
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