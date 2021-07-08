<?php

namespace BackerClub\IndiegogoApiClient\Response;

use BackerClub\IndiegogoApiClient\AbstractEntity;

abstract class PaginatedResponse extends AbstractEntity
{
    private int        $count;
    private Pagination $pagination;
    protected array    $response;

    abstract public function setResponse(array $response): void;

    abstract public function getResponse(): array;

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return Pagination
     */
    public function getPagination(): Pagination
    {
        return $this->pagination;
    }

    /**
     * @param object $pagination
     */
    public function setPagination(object $pagination): void
    {
        $this->pagination = new Pagination($pagination);
    }
}
