<?php

namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class CredentialsTest extends ClientTestCase
{
    public function test_credentials_request_returns_credentials_object()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/credentials.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $credentials = $indiegogo->credentials();

        $this->assertInstanceOf(\Indiegogo\Entity\Credentials::class, $credentials);
    }
}