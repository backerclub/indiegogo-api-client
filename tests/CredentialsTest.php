<?php

namespace BackerClub\IndiegogoApiClient\Tests;

use BackerClub\IndiegogoApiClient\Entity\Credentials;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class CredentialsTest extends ClientTestCase
{
    public function testCredentialsRequestReturnsCredentialsObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/credentials.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $credentials = $indiegogo->credentials();

        $this->assertInstanceOf(Credentials::class, $credentials);
    }
}
