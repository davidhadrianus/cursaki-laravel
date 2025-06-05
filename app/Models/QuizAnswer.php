<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\QuizAnswerFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'quiz_attempt_id',
        'quiz_question_id',
        'quiz_option_id',
        'is_correct',
    ];

    public function question()
    {
        return $this->belongsTo(QuizQuestion::class);
    }

    public function option()
    {
        return $this->belongsTo(QuizOption::class);
    }

    public function attempt()
    {
        return $this->belongsTo(QuizAttempt::class);
    }
}
