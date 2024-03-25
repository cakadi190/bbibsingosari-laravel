<?php

namespace App\Helpers;

use App\Enum\LanguageEnum;

class LanguageHelper
{
    /**
     * Get language based on locale
     *
     * @return LanguageEnum
     */
    public static function getLanguages(): LanguageEnum
    {
        return match(app()->getLocale()) {
            'id' => LanguageEnum::ID,
            'en' => LanguageEnum::EN,
            default => LanguageEnum::ID,
        };
    }
}
