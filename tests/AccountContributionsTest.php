<?php

namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class AccountContributionsTest extends ClientTestCase
{
    public function testAccountContributionsRequestReturnsAccountContributionsResponseObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/account_contributions.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $accountContributionsResponse = $indiegogo->accountContributions(12345);

        $this->assertInstanceOf(\Indiegogo\Response\AccountContributionsResponse::class, $accountContributionsResponse);
    }
}
