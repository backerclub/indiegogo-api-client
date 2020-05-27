<?php


namespace Indiegogo\Entity;


class Auth
{
    private string $email;
    private string $password;
    private string $apiToken;

    public function __construct(string $email, string $password, string $apiToken)
    {
        $this->email = $email;
        $this->password = $password;
        $this->apiToken = $apiToken;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getApiToken(): string
    {
        return $this->apiToken;
    }
}