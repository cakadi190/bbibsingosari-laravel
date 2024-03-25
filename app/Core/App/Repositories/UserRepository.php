<?php

namespace App\Core\App\Repositories;

use App\Core\App\Interfaces\UserInterface;
use App\Core\App\Repositories\BaseRepository;
use App\Models\User;

/**
 * Base user repository
 *
 * @package bbibsingosari
 * @since 1.0.0
 * @author cakadi190 <cakadi190@gmail.com>
 */
class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $user)
    {
        $this->modelBind = $user;
    }

    public function getBasicPaginate(): mixed
    {
        return $this->modelBind->query()->paginate(10);
    }
    public function store(array $data): mixed
    {
        return $this->modelBind->query()->create($data);
    }
    public function update(array $data): mixed
    {
        return $this->modelBind->query()->update($data);
    }
    public function delete(): bool
    {
        return $this->modelBind->query()->delete();
    }
    public function single(): mixed
    {
        return $this->modelBind->query()->first();
    }
}
