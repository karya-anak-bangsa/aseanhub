<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeline extends Model
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table        = 'tb_timeline';
    protected $primaryKey   = 'id_timeline';

    // ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    // ...
    protected $fillable = [
        'title',
        'description',
        'date_start',
        'date_end',
        'phase_key',
        'status_data',
    ];

    // ...
    protected $attributes = [
        'status_data' => 'Active',
    ];

    // ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];
}
