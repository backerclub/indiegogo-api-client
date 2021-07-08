<?php
/**
 * Search API
 * https://developer.indiegogo.com/docs/search
 */
require __DIR__ . '/../vendor/autoload.php';

$auth = new \BackerClub\IndiegogoApiClient\Entity\Auth(
    'email@example.com',
    'password-goes-here',
    'api-token-goes-here'
);

$indiegogo = new \BackerClub\IndiegogoApiClient\IndiegogoClient($auth);

$params = [

];

$campaigns = $indiegogo->search($params);
