<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table      = 'tb_admin';
    protected $primaryKey = 'id_admin';

    // ...
    protected $keyType   = 'int';
    public $incrementing = true;

    // ...
    protected $fillable = [
        'admin_name',
        'email',
        'password',
        'status_data',
    ];

    // ...
    protected $hidden = [
        'password',
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
    ];
}
