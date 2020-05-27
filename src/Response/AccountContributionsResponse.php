<?php


namespace Indiegogo\Response;


use Indiegogo\Entity\AccountContribution;

class AccountContributionsResponse extends PaginatedResponse
{
    /**
     * @return AccountContribution[]
     */
    public function getResponse(): array
    {
        return $this->response;
    }

    /**
     * @param array $response
     */
    public function setResponse(array $response): void
    {
        $this->response = [];

        foreach ($response as $item) {
            $this->response[] = new AccountContribution($item);
        }
    }
}
