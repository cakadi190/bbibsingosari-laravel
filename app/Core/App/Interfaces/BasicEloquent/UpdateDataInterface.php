<?php

namespace App\Core\App\Interfaces\BasicEloquent;

use Illuminate\Database\Eloquent\Model;

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
    public function update(Model $model, array $data): mixed;
}
