<?php

namespace App\Support\Formatter;

use Carbon\Carbon;

class Formatter
{

    public static function number(int|float|null $value, int $decimals = 0): string
    {
        return number_format($value ?? 0, $decimals);
    }

    public static function date(string|\DateTimeInterface|null $date): string
    {
        return $date ? Carbon::parse($date)->format('d M Y') : '-';
    }

    public static function time(string|\DateTimeInterface|null $date): string
    {
        return $date ? Carbon::parse($date)->format('H:i') : '-';
    }

    public static function locale(?string $en, ?string $id): string
    {
        return sprintf(
            '<strong>%s</strong><br><small class="text-muted">%s</small>',
            e($en ?? '-'),
            e($id ?? '-')
        );
    }

    public static function badge(string $status): string
    {
        return match ($status) {
            'Active',
            'Published'     => 'success',
            'Draft'         => 'warning',
            'Archived'      => 'secondary',
            default         => 'danger',
        };
    }
}
