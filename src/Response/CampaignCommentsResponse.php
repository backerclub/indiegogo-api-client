<?php

namespace BackerClub\IndiegogoApiClient\Response;

use BackerClub\IndiegogoApiClient\Entity\CampaignComment;

class CampaignCommentsResponse extends PaginatedResponse
{
    /**
     * @return CampaignComment[]
     */
    public function getResponse(): array
    {
        return $this->response;
    }

    public function setResponse(array $response): void
    {
        $this->response = [];

        foreach ($response as $item) {
            $this->response[] = new CampaignComment($item);
        }
    }
}
