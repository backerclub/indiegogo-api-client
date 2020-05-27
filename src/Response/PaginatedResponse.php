<?php

namespace Indiegogo\Response;

use Indiegogo\AbstractEntity;

abstract class PaginatedResponse extends AbstractEntity
{
    private int $count;
    private Pagination $pagination;
    protected array $response;

    abstract function setResponse(array $response): void;

    abstract function getResponse(): array;

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
