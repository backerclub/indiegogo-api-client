<?php

namespace Indiegogo\Response;

use Indiegogo\Entity\Campaign;

class CampaignsResponse extends PaginatedResponse
{
    /**
     * @return Campaign[]
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
            $this->response[] = new Campaign($item);
        }
    }
}
