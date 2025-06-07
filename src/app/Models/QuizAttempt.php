<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    /** @use HasFactory<\Database\Factories\QuizAttemptFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'quiz_id', 
        'studant_id', 
        'score',
        'completed_at',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function studant()
    {
        return $this->belongsTo(Studant::class);
    }

    public function calculateScore(): int
    {
        $correctAnswerIds = $this->answers->pluck('option_id')->filter(function ($optionId) {
            return QuizOption::where('id', $optionId)->where('is_correct', true)->exists();
        });

        return round(($correctAnswerIds->count() / $this->answers->count()) * 100);
    }

}
