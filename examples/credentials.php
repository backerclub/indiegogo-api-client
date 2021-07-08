<?php

require __DIR__ . '/../vendor/autoload.php';

$auth = new \BackerClub\IndiegogoApiClient\Entity\Auth(
    'email@example.com',
    'password-goes-here',
    'api-token-goes-here'
);

$indiegogo = new \BackerClub\IndiegogoApiClient\IndiegogoClient($auth);

$credentials = $indiegogo->credentials();
