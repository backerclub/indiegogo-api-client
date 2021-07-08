<?php

require __DIR__ . '/../vendor/autoload.php';

$auth = new \BackerClub\IndiegogoApiClient\Entity\Auth(
    'email@example.com',
    'password-goes-here',
    'api-token-goes-here'
);

$indiegogo = new \BackerClub\IndiegogoApiClient\IndiegogoClient($auth);

// If you pass an array of campaign IDs, it does not return back a pagination property in the response....
$campaigns = $indiegogo->campaigns([2596066]);
