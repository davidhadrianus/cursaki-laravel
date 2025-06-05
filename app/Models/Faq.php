<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    /** @use HasFactory<\Database\Factories\FaqFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'question',
        'answer',
        'faqable_id',
        'faqable_type',
    ];

    public function faqable()
    {
        return $this->morphTo();
    }
}
