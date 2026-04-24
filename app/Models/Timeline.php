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

    #--------------------------------------------------------------------------
    # CURRENT PHASE (SOURCE OF TRUTH)
    #--------------------------------------------------------------------------
    public static function currentPhase()
    {
        return self::where('status_data', 'Active')
            ->where('date_start', '<=', now())
            ->where('date_end', '>=', now())
            ->orderBy('date_start')
            ->first();
    }

    #--------------------------------------------------------------------------
    # ACCESSOR (FOR UI)
    #--------------------------------------------------------------------------
    public function getIsCurrentAttribute()
    {
        return now()->between($this->date_start, $this->date_end);
    }

    #--------------------------------------------------------------------------
    # CONSTANT (PHASE KEY)
    #--------------------------------------------------------------------------
    const PHASE_REGISTRATION = 'registration';
    const PHASE_SUBMISSION   = 'submission';
    const PHASE_ASSESSMENT   = 'assessment';
    const PHASE_ANNOUNCEMENT   = 'announcement';
}
