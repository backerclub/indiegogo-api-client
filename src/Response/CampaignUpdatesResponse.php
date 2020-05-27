<?php

namespace Indiegogo\Response;

use Indiegogo\Entity\CampaignUpdate;

class CampaignUpdatesResponse extends PaginatedResponse
{
    /**
     * @return CampaignUpdate[]
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
            $this->response[] = new CampaignUpdate($item);
        }
    }
}
