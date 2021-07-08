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

    private ?Token $token = null;

    public function __construct(Auth $auth, Token $token = null, ClientInterface $httpClient = null)
    {
        $this->setAuth($auth);
        $this->setToken($token);
        $this->setHttpClient($httpClient);
    }

    public function setAuth(Auth $auth): void
    {
        $this->auth = $auth;
    }

    public function getAuth(): Auth
    {
        return $this->auth;
    }

    public function setToken(?Token $token): void
    {
        $this->token = $token;
    }

    public function getToken(): ?Token
    {
        return $this->token;
    }

    public function setHttpClient(?ClientInterface $client): void
    {
        if (is_null($client)) {
            $this->httpClient = new Client();
        } else {
            $this->httpClient = $client;
        }
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
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
        $response = $this->getHttpClient()->request(
            'POST',
            $this->tokenRequestUrl,
            [
                'form_params' => [
                    'grant_type'      => 'password',
                    'credential_type' => 'email',
                    'email'           => $this->getAuth()->getEmail(),
                    'password'        => $this->getAuth()->getPassword(),
                ],
            ]
        );

        return new Token(json_decode($response->getBody(), false));
    }

    private function request(string $method, string $path, array $options = []): ResponseInterface
    {
        if (!$this->getToken() || $this->getToken()->isExpired()) {
            $this->setToken($this->tokenRequest());
        }

        if (!isset($options['query'])) {
            $options['query'] = [];
        }

        $options['query'] = array_merge($options['query'], [
            'api_token'    => $this->getAuth()->getApiToken(),
            'access_token' => $this->getToken()->getAccessToken(),
        ]);

        return $this->getHttpClient()->request(
            $method,
            $path,
            $options
        );
    }
}
