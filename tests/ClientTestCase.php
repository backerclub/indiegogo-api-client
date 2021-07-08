<?php

namespace BackerClub\IndiegogoApiClient\Tests;

use BackerClub\IndiegogoApiClient\Entity\Auth;
use BackerClub\IndiegogoApiClient\Entity\Token;
use BackerClub\IndiegogoApiClient\IndiegogoClient;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;

class ClientTestCase extends TestCase
{
    protected function createIndiegogoClient(MockHandler $mockHandler): IndiegogoClient
    {
        $handlerStack = HandlerStack::create($mockHandler);
        $httpClient   = new HttpClient(['handler' => $handlerStack]);

        // Setup fake auth
        $auth = new Auth('email@example.com', 'password', 'api-token-goes-here');

        // Setup fake token so our client doesn't need to request one.
        $token = new Token();
        $token->setAccessToken('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $token->setCreatedAt(time());
        $token->setExpiresIn(60 * 60 * 60);

        return new IndiegogoClient($auth, $token, $httpClient);
    }
}
