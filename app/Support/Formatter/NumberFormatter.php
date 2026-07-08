<?php

namespace App\Support\Formatter;

class NumberFormatter
{
    public function __construct() {}

    public static function number(int|float|null $value, int $decimals = 0): string
    {
        return number_format($value ?? 0, $decimals);
    }
}
