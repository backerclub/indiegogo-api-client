<?php

namespace BackerClub\IndiegogoApiClient\Response;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Pagination extends AbstractEntity
{
    /**
     * Previous page number
     */
    private ?int $previous = null;

    /**
     * Next page number
     */
    private ?int $next = null;

    /**
     * Current page number
     */
    private ?int $current = null;

    /**
     * Results per page
     */
    private ?int $perPage = null;

    /**
     * Total paginated result count
     */
    private ?int $count = null;

    /**
     * Total Pages
     */
    private ?int $pages = null;

    public function getPrevious(): ?int
    {
        return $this->previous;
    }

    public function setPrevious(?int $previous): void
    {
        $this->previous = $previous;
    }

    public function getNext(): ?int
    {
        return $this->next;
    }

    public function setNext(?int $next): void
    {
        $this->next = $next;
    }

    public function getCurrent(): ?int
    {
        return $this->current;
    }

    public function setCurrent(?int $current): void
    {
        $this->current = $current;
    }

    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    public function setPerPage(?int $perPage): void
    {
        $this->perPage = $perPage;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function getPages(): ?int
    {
        return $this->pages;
    }

    public function setPages(?int $pages): void
    {
        $this->pages = $pages;
    }
}
