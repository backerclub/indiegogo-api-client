<?php

namespace BackerClub\IndiegogoApiClient\Response;

use BackerClub\IndiegogoApiClient\Entity\AccountContribution;

class AccountContributionsResponse extends PaginatedResponse
{
    /**
     * @return AccountContribution[]
     */
    public function getResponse(): array
    {
        return $this->response;
    }

    public function setResponse(array $response): void
    {
        $this->response = [];

        foreach ($response as $item) {
            $this->response[] = new AccountContribution($item);
        }
    }
}
