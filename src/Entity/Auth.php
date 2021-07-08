<?php

namespace BackerClub\IndiegogoApiClient\Entity;

class Auth
{
    private string $email;
    private string $password;
    private string $apiToken;

    public function __construct(string $email, string $password, string $apiToken)
    {
        $this->email    = $email;
        $this->password = $password;
        $this->apiToken = $apiToken;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getApiToken(): string
    {
        return $this->apiToken;
    }
}
