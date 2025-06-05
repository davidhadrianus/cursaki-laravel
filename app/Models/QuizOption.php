<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizOption extends Model
{
    /** @use HasFactory<\Database\Factories\QuizOptionFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'answer_option',
        'is_correct',
        'quiz_question_id',
    ];

    public function question()
    {
        return $this->belongsTo(QuizQuestion::class);
    }
}
