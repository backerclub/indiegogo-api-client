<?php

namespace Indiegogo\Response;

use Indiegogo\Entity\Perk;

class CampaignPerksResponse extends PaginatedResponse
{
    /**
     * @return Perk[]
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
            $this->response[] = new Perk($item);
        }
    }
}
