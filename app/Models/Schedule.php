<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'description',
        'is_active',
        'status',
        'scheduleable_type', 
        'scheduleable_id',
    ];

    public function scheduleable()
    {
        return $this->morphTo();
    }
}
