<?php

namespace App\Core\App\Interfaces;

use App\Core\App\Interfaces\BasicEloquent\DeleteDataInterface;
use App\Core\App\Interfaces\BasicEloquent\SingleDataInterface;
use App\Core\App\Interfaces\BasicEloquent\StoreDataInterface;
use App\Core\App\Interfaces\BasicEloquent\UpdateDataInterface;
use App\Core\App\Interfaces\Pagination\BasicPaginationInterface;

interface UserInterface extends BasicPaginationInterface, StoreDataInterface, UpdateDataInterface, DeleteDataInterface, SingleDataInterface
{}
