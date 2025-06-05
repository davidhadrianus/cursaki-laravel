<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quiz extends Model
{
    /** @use HasFactory<\Database\Factories\QuizFactory> */
    use HasFactory, HasKey, HasSlug;

    protected $fillable = [
        'key',
        'title',
        'slug',
        'description',
        'is_active',
        'course_id',
        'subject_id',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }

    public function attempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
