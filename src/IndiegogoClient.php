<?php

namespace BackerClub\IndiegogoApiClient;

use BackerClub\IndiegogoApiClient\Entity\Account;
use BackerClub\IndiegogoApiClient\Entity\Auth;
use BackerClub\IndiegogoApiClient\Entity\Credentials;
use BackerClub\IndiegogoApiClient\Entity\Token;
use BackerClub\IndiegogoApiClient\Response\AccountContributionsResponse;
use BackerClub\IndiegogoApiClient\Response\CampaignCommentsResponse;
use BackerClub\IndiegogoApiClient\Response\CampaignPerksResponse;
use BackerClub\IndiegogoApiClient\Response\CampaignsResponse;
use BackerClub\IndiegogoApiClient\Response\CampaignUpdatesResponse;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class IndiegogoClient
{
    private string $apiUrl = 'https://api.indiegogo.com/2/';

    private string $tokenRequestUrl = 'https://auth.indiegogo.com/oauth/token';

    private Auth $auth;

    private ClientInterface $httpClient;

    private Token $token;

    public function __construct(Auth $auth, Token $token = null, ClientInterface $httpClient = null)
    {
        $this->auth = $auth;

        if (!is_null($token)) {
            $this->token = $token;
        }

        if (is_null($httpClient)) {
            $this->httpClient = new Client();
        } else {
            $this->httpClient = $httpClient;
        }
    }

    /**
     * Search API
     *
     * @link https://developer.indiegogo.com/docs/search
     */
    public function search(array $params = [], int $page = 1): CampaignsResponse
    {
        $requestOptions = [
            'query' => ['page' => $page],
        ];

        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $requestOptions['query'][$key] = $value;
            }
        }

        $response = $this->request(
            'GET',
            $this->apiUrl . 'search/campaigns.json',
            $requestOptions,
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignsResponse($json);
    }

    public function campaigns(array $ids = [], int $page = 1): CampaignsResponse
    {
        $requestOptions = [
            'query' => ['page' => $page],
        ];

        if (!empty($ids)) {
            foreach ($ids as $id) {
                $requestOptions['query']['ids[]'] = $id;
            }
        }

        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns.json',
            $requestOptions,
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignsResponse($json);
    }

    public function credentials(): Credentials
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'me.json'
        );

        $json = json_decode($response->getBody(), false);

        return new Credentials($json->response);
    }

    public function accountContributions(int $accountId, int $page = 1): AccountContributionsResponse
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'accounts/' . $accountId . '/contributions.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new AccountContributionsResponse($json);
    }

    public function account(int $accountId): Account
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'accounts/' . $accountId . '.json'
        );

        $json = json_decode($response->getBody(), false);

        return new Account($json->response);
    }

    public function campaignComments(int $campaignId, int $page = 1): CampaignCommentsResponse
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/' . $campaignId . '/comments.json',
            ['query' => ['page' => $page]],
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignCommentsResponse($json);
    }

    public function campaignPerks(int $campaignId): CampaignPerksResponse
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/' . $campaignId . '/perks.json'
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignPerksResponse($json);
    }

    public function campaignUpdates(int $campaignId, int $page = 1): CampaignUpdatesResponse
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/' . $campaignId . '/updates.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignUpdatesResponse($json);
    }

    public function favorites(int $page = 1): CampaignsResponse
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'favorites.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignsResponse($json);
    }

    public function recommendations(int $page = 1): CampaignsResponse
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/recommendations.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignsResponse($json);
    }

    public function tokenRequest(): Token
    {
        $response = $this->httpClient->request(
            'POST',
            $this->tokenRequestUrl,
            [
                'form_params' => [
                    'grant_type'      => 'password',
                    'credential_type' => 'email',
                    'email'           => $this->auth->getEmail(),
                    'password'        => $this->auth->getPassword(),
                ],
            ]
        );

        return new Token(json_decode($response->getBody(), false));
    }

    private function request(string $method, string $path, array $options = []): ResponseInterface
    {
        if (!isset($this->token) || $this->token->isExpired()) {
            $this->token = $this->tokenRequest();
        }

        if (!isset($options['query'])) {
            $options['query'] = [];
        }

        $options['query'] = array_merge($options['query'], [
            'api_token'    => $this->auth->getApiToken(),
            'access_token' => $this->token->getAccessToken(),
        ]);

        return $this->httpClient->request(
            $method,
            $path,
            $options
        );
    }
}
