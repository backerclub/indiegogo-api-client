<?php
require __DIR__ . '/../vendor/autoload.php';

$auth = new \Indiegogo\Entity\Auth(
    'email@example.com',
    'password-goes-here',
    'api-token-goes-here'
);

$indiegogo = new \Indiegogo\Client($auth);

$campaignCommentsResponse = $indiegogo->campaignComments(12345);
