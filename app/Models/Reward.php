<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reward extends Model
{
    # ...
    use SoftDeletes, HasFactory;

    # ...
    protected $table        = 'tb_reward';
    protected $primaryKey   = 'id_reward';

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

    public function getFormattedAmountAttribute()
    {
        return number_format($this->amount, 0, ',', '.');
    }
}
