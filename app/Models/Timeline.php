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
    # ACCESSOR (FOR UI)
    #--------------------------------------------------------------------------
    public function getIsCurrentAttribute()
    {
        // return now()->between($this->date_start, $this->date_end);
        return $this->status_data === 'Active' && now()->between($this->date_start, $this->date_end);
    }

    public function getDateStartFormattedAttribute()
    {
        return $this->date_start->translatedFormat('d F Y');
    }

    public function getDateEndFormattedAttribute()
    {
        return $this->date_end->translatedFormat('d F Y');
    }

    #--------------------------------------------------------------------------
    # CONSTANT (PHASE KEY)
    #--------------------------------------------------------------------------
    const PHASE_REGISTRATION = 'Registration';
    const PHASE_SUBMISSION   = 'Submission';
    const PHASE_ASSESSMENT   = 'Assessment';
    const PHASE_ANNOUNCEMENT   = 'Announcement';

    public static function phaseOptions()
    {
        return [
            self::PHASE_REGISTRATION => 'Registration',
            self::PHASE_SUBMISSION   => 'Submission',
            self::PHASE_ASSESSMENT   => 'Assessment',
            self::PHASE_ANNOUNCEMENT => 'Announcement',
        ];
    }
}
