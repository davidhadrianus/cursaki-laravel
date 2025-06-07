<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizQuestion extends Model
{
    /** @use HasFactory<\Database\Factories\QuizQuestionFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'question',
        'quiz_id',
        'is_active'
    ];

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function options()
    {
        return $this->hasMany(QuizOption::class);
    }
}
