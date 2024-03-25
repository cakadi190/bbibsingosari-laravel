<?php

namespace App\Core\App\Interfaces\BasicEloquent;

/**
 * Update Data Interface Class
 *
 * @package bbibsingosari
 * @since 1.0.0
 * @author cakadi190 <cakadi190@gmail.com>
 */
interface UpdateDataInterface
{
    /**
     * Update Data from database
     *
     * @param array $data
     * @return mixed
     */
    public function update(array $data): mixed;
}
