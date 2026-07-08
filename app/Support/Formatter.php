<?php

namespace App\Support;

class Formatter
{
    public static function number(?string $value): string
    {
        return $value === null ? '-' : number_format($value);
    }

    public static function bilingual(?string $en, ?string $id): string
    {
        $en = $en ?? '-';
        $id = $id ?? '-';
        return "<strong>{$en}</strong><br><small>{$id}</small>";
    }
}
