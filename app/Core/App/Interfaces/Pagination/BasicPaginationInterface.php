<?php

namespace App\Core\App\Interfaces\Pagination;

interface BasicPaginationInterface
{
    /**
     * Get paginate data from eloquent
     *
     * @return mixed
     */
    public function getBasicPaginate(): mixed;
}

