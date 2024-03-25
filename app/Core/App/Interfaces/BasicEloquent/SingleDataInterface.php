<?php

namespace App\Core\App\Interfaces\BasicEloquent;

/**
 * Find Single Data from ID in database
 *
 * @package bbibsingosari
 * @since 1.0.0
 * @author cakadi190 <cakadi190@gmail.com>
 */
interface SingleDataInterface
{
    /**
     * Find single data based on ID from database
     *
     * @param int $id
     * @return mixed
     */
    public function single();
}
