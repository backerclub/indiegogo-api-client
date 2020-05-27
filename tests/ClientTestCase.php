<?php

namespace Indiegogo\Tests;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use Indiegogo\Client;
use Indiegogo\Entity\Auth;
use Indiegogo\Entity\Token;
use PHPUnit\Framework\TestCase;

class ClientTestCase extends TestCase
{
    protected function createIndiegogoClient(MockHandler $mockHandler)
    {
        $handlerStack = HandlerStack::create($mockHandler);
        $httpClient = new HttpClient(['handler' => $handlerStack]);

        // Setup fake auth
        $auth = new Auth('email@example.com', 'password', 'api-token-goes-here');

        // Setup fake token so our client doesn't need to request one.
        $token = new Token();
        $token->setAccessToken('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $token->setCreatedAt(time());
        $token->setExpiresIn(60 * 60 * 60);

        return new Client($auth, $token, $httpClient);
    }
}