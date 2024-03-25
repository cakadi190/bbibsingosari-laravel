<?php

namespace App\Core\App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Initalize the base repository for all repositories
 *
 * @package bbibsingosari
 * @since 1.0.0
 * @author cakadi190 <cakadi190@gmail.com>
 */
class BaseRepository
{
    /**
     * Handle model initialization.
     *
     * @var Model $modelBind The model instance to be bound
     */
    public Model $modelBind;
}
