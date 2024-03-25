<?php

namespace App\Core\App\Interfaces\BasicEloquent;

/**
 * Get Data Interface Class
 *
 * @package bbibsingosari
 * @since 1.0.0
 * @author cakadi190 <cakadi190@gmail.com>
 */
interface DeleteDataInterface
{
    /**
     * Get Data from database
     *
     * @return bool
     */
    public function delete(): bool;
}
