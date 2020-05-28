<?php

namespace Indiegogo\Response;

use Indiegogo\AbstractEntity;

class Pagination extends AbstractEntity
{
    /**
     * @var int $previous page number
     */
    private int $previous;

    /**
     * @var int $next page number
     */
    private int $next;

    /**
     * @var int $current page number
     */
    private int $current;

    /**
     * @var int $perPage - results per page
     */
    private int $perPage;

    /**
     * Total paginated result count
     * @var int
     */
    private int $count;

    /**
     * Total Pages
     * @var int
     */
    private int $pages;

    /**
     * @return int
     */
    public function getPrevious(): int
    {
        return $this->previous;
    }

    /**
     * @param int $previous
     */
    public function setPrevious($previous): void
    {
        if (!is_null($previous)) {
            $this->previous = $previous;
        }
    }

    /**
     * @return int
     */
    public function getNext(): int
    {
        return $this->next;
    }

    /**
     * @param int $next
     */
    public function setNext($next): void
    {
        if (!is_null($next)) {
            $this->next = $next;
        }
    }

    /**
     * @return int
     */
    public function getCurrent(): int
    {
        return $this->current;
    }

    /**
     * @param int $current
     */
    public function setCurrent(int $current): void
    {
        $this->current = $current;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     */
    public function setPerPage(int $perPage): void
    {
        $this->perPage = $perPage;
    }

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
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @param int $pages
     */
    public function setPages(int $pages): void
    {
        $this->pages = $pages;
    }
}
