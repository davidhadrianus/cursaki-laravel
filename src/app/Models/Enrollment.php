<?php

namespace App\Models;

use App\Enums\StatusEnum;
use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    /** @use HasFactory<\Database\Factories\EnrollmentFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'course_id',
        'studant_id',
        'status'
    ];

    protected $casts = [
        'status' => StatusEnum::class
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function studant()
    {
        return $this->belongsTo(Studant::class);
    }
}
