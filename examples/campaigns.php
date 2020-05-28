<?php

require __DIR__ . '/../vendor/autoload.php';

$auth = new \Indiegogo\Entity\Auth(
    'email@example.com',
    'password-goes-here',
    'api-token-goes-here'
);

$indiegogo = new \Indiegogo\Client($auth);

// If you pass an array of campaign IDs, it does not return back a pagination property in the response....
$campaigns = $indiegogo->campaigns([2596066]);
