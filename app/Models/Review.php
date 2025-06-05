<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'user_id',
        'comment',
        'rating',
        'reviewable_id',
        'reviewable_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviewable()
    {
        return $this->morphTo();
    }
}
