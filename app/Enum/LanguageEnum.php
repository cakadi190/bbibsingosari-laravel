<?php

namespace App\Enum;

enum LanguageEnum: string
{
    case EN = 'en';
    case ID = 'id';

    public function label(): string
    {
        return match ($this) {
            self::EN => 'English',
            self::ID => 'Indonesia',
        };
    }

    public function flag(): string
    {
        return match ($this) {
            self::EN => 'us',
            self::ID => 'id',
        };
    }
}
