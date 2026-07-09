<?php

namespace App\Support;

use Carbon\Carbon;

class Formatter
{
    public static function number(?string $value): string
    {
        return $value === null ? '-' : number_format($value);
    }

    public static function dateTime(?string $datetime): string
    {
        // $date = $datetime ? Carbon::parse($datetime)->format('d M Y') : '-';
        // $time = $datetime ? Carbon::parse($datetime)->format('H:i') : '-';

        $carbon = Carbon::parse($datetime);
        $date   = $carbon->format('d M Y');
        $time   = $carbon->format('H:i');
        return "<span>{$date}</span><br><small>{$time}</small>";
    }

    public static function bilingual(?string $en, ?string $id): string
    {
        $en = $en ?? '-';
        $id = $id ?? '-';
        return "<strong>{$en}</strong><br><small>{$id}</small>";
    }

    public static function badgeNewsPublished(?string $status): string
    {
        return match ($status) {
            'Published' => 'success',
            'Draft'     => 'warning',
            'Archived'  => 'secondary',
        };
    }

    public static function badgeStatus(?string $status): string
    {
        return match ($status) {
            'Active'        => 'success',
            'Not Active'    => 'danger',
        };
    }
}
