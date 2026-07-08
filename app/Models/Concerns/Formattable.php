<?php

namespace App\Models\Concerns;

use App\Support\Formatter;

trait Formattable
{
    public function formatNumber(string $value): string
    {
        return Formatter::number($this->{$value});
    }

    public function bilingual(string $en, string $id): string
    {
        return Formatter::bilingual($this->{$en}, $this->{$id});
    }
}
