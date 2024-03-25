<?php

namespace App\Core\App\Interfaces\BasicEloquent;

/**
 * Storing Some Data Interface Class
 *
 * @package bbibsingosari
 * @since 1.0.0
 * @author cakadi190 <cakadi190@gmail.com>
 */
interface StoreDataInterface
{
    /**
     * Store Data to database
     *
     * @param array $data
     * @return mixed
     */
    public function store(array $data): mixed;
}
