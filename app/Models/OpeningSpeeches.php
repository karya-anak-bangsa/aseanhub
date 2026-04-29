<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpeningSpeeches extends Model
{
    # ...
    use SoftDeletes, HasFactory;

    # ...
    protected $table        = 'tb_opening_speeches';
    protected $primaryKey   = 'id_opening_speeches';

    # ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    # ...
    protected $guarded = [];

    # ...
    protected $attributes = [
        'status_data' => 'Active',
    ];

    # ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected function photoUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->photo
                ? asset('storage/' . $this->photo)
                : asset('storage/default/default-user.webp'),
        );
    }
}
