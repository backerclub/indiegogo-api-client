<?php

namespace Indiegogo\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class AccountTest extends ClientTestCase
{
    public function testAccountRequestReturnsAccountObject()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/fixtures/account.json')),
        ]);

        $indiegogo = $this->createIndiegogoClient($mock);

        $account = $indiegogo->account(12345);

        $this->assertInstanceOf(\Indiegogo\Entity\Account::class, $account);
    }
}
