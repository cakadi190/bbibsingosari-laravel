<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enum\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the roles that belong to the user.
     *
     * @return Collection
     */
    public static function getUserRoles(): Collection
    {
        return collect(UserRoleEnum::cases())->pluck('value');
    }

    /**
     * Get the user roles with predefined data
     *
     * @return UserRoleEnum
     */
    public function getUserRole(): UserRoleEnum
    {
        return match($this->roles->pluck('name')[0]) {
            'Administrator' => UserRoleEnum::ADMINISTRATOR,
            'Barn' => UserRoleEnum::INSEMINATIONS,
            'Farm' => UserRoleEnum::BARN,
            'Inseminations' => UserRoleEnum::FARM,
            default => UserRoleEnum::BARN
        };
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
