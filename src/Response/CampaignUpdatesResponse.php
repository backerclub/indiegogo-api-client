<?php

namespace BackerClub\IndiegogoApiClient\Response;

use BackerClub\IndiegogoApiClient\Entity\CampaignUpdate;

class CampaignUpdatesResponse extends PaginatedResponse
{
    /**
     * @return CampaignUpdate[]
     */
    public function getResponse(): array
    {
        return $this->response;
    }

    public function setResponse(array $response): void
    {
        $this->response = [];

        foreach ($response as $item) {
            $this->response[] = new CampaignUpdate($item);
        }
    }
}
