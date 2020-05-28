<?php
/**
 * Search API
 * https://developer.indiegogo.com/docs/search
 */
require __DIR__ . '/../vendor/autoload.php';

$auth = new \Indiegogo\Entity\Auth(
    'email@example.com',
    'password-goes-here',
    'api-token-goes-here'
);

$indiegogo = new \Indiegogo\Client($auth);

$params = [

];

$campaigns = $indiegogo->search($params);
