<?php


namespace Indiegogo;

use GuzzleHttp\ClientInterface;
use Indiegogo\Entity\Account;
use Indiegogo\Entity\Auth;
use Indiegogo\Entity\Credentials;
use Indiegogo\Entity\Token;
use Indiegogo\Response\AccountContributionsResponse;
use Indiegogo\Response\CampaignCommentsResponse;
use Indiegogo\Response\CampaignPerksResponse;
use Indiegogo\Response\CampaignsResponse;
use Indiegogo\Response\CampaignUpdatesResponse;

class Client
{
    private string $apiUrl = 'https://api.indiegogo.com/2/';

    private string $tokenRequestUrl = 'https://auth.indiegogo.com/oauth/token';

    private Auth $auth;

    private ClientInterface $httpClient;

    private Token $token;

    /**
     * Client constructor.
     * @param Auth $auth
     * @param ClientInterface|null $httpClient
     */
    public function __construct(Auth $auth, Token $token = null, ClientInterface $httpClient = null)
    {
        $this->auth = $auth;

        if (!is_null($token)) {
            $this->token = $token;
        }

        if (is_null($httpClient)) {
            $this->httpClient = new \GuzzleHttp\Client();
        } else {
            $this->httpClient = $httpClient;
        }
    }

    public function campaigns(array $ids = [], int $page = 1)
    {
        $requestOptions = [
            'query' => ['page' => $page]
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

    public function credentials()
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'me.json'
        );

        $json = json_decode($response->getBody(), false);

        return new Credentials($json->response);
    }

    public function accountContributions(int $accountId, int $page = 1)
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'accounts/' . $accountId . '/contributions.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new AccountContributionsResponse($json);
    }

    public function account(int $accountId)
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'accounts/' . $accountId . '.json'
        );

        $json = json_decode($response->getBody(), false);

        return new Account($json->response);
    }

    public function campaignComments(int $campaignId, int $page = 1)
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/' . $campaignId . '/comments.json',
            ['query' => ['page' => $page]],
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignCommentsResponse($json);
    }

    public function campaignPerks(int $campaignId)
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/' . $campaignId . '/perks.json'
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignPerksResponse($json);
    }

    public function campaignUpdates(int $campaignId, int $page = 1)
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/' . $campaignId . '/updates.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignUpdatesResponse($json);
    }

    public function favorites(int $page = 1)
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'favorites.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignsResponse($json);
    }

    public function recommendations(int $page = 1)
    {
        $response = $this->request(
            'GET',
            $this->apiUrl . 'campaigns/recommendations.json',
            ['query' => ['page' => $page]]
        );

        $json = json_decode($response->getBody(), false);

        return new CampaignsResponse($json);
    }

    public function tokenRequest()
    {
        $response = $this->httpClient->request(
            'POST',
            $this->tokenRequestUrl,
            [
                'form_params' => [
                    'grant_type' => 'password',
                    'credential_type' => 'email',
                    'email' => $this->auth->getEmail(),
                    'password' => $this->auth->getPassword()
                ]
            ]
        );

        return new Token(json_decode($response->getBody()));
    }

    private function request(string $method, $path, $options = [])
    {
        if (!isset($this->token) || $this->token->isExpired()) {
            $this->token = $this->tokenRequest();
        }

        if (!isset($options['query'])) {
            $options['query'] = [];
        }

        $options['query'] += [
            'api_token' => $this->auth->getApiToken(),
            'access_token' => $this->token->getAccessToken()
        ];

        return $this->httpClient->request(
            $method,
            $path,
            $options
        );
    }
}