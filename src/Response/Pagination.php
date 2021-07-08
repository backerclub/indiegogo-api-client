<?php

namespace BackerClub\IndiegogoApiClient\Response;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Pagination extends AbstractEntity
{
    /**
     * Previous page number
     */
    private int $previous;

    /**
     * Next page number
     */
    private int $next;

    /**
     * Current page number
     */
    private int $current;

    /**
     * Results per page
     */
    private int $perPage;

    /**
     * Total paginated result count
     */
    private int $count;

    /**
     * Total Pages
     */
    private int $pages;

    public function getPrevious(): int
    {
        return $this->previous;
    }

    public function setPrevious(?int $previous): void
    {
        if (!is_null($previous)) {
            $this->previous = $previous;
        }
    }

    public function getNext(): int
    {
        return $this->next;
    }

    public function setNext(?int $next): void
    {
        if (!is_null($next)) {
            $this->next = $next;
        }
    }

    public function getCurrent(): int
    {
        return $this->current;
    }

    public function setCurrent(int $current): void
    {
        $this->current = $current;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function setPerPage(int $perPage): void
    {
        $this->perPage = $perPage;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getPages(): int
    {
        return $this->pages;
    }

    public function setPages(int $pages): void
    {
        $this->pages = $pages;
    }
}
