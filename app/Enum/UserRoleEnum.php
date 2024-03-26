<?php

namespace App\Enum;

enum UserRoleEnum: string
{
    case ADMINISTRATOR = 'Administrator';
    case INSEMINATIONS = 'Inseminations';
    case BARN = 'Barn';
    case FARM = 'Farm';

    /**
     * Giving match for enum labels
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::ADMINISTRATOR => 'Administrator',
            self::INSEMINATIONS => 'Inseminasi',
            self::BARN => 'Gudang Pakan',
            self::FARM => 'Kandang',
        };
    }

    /**
     * Giving match for enum colors
     *
     * @return string
     */
    public function color(): string
    {
        return match ($this) {
            self::ADMINISTRATOR => 'primary',
            self::INSEMINATIONS => 'success',
            self::BARN => 'warning',
            self::FARM => 'danger',
        };
    }
}
