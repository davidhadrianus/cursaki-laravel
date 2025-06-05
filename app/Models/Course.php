<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory, HasKey, HasSlug;

    protected $fillable = [
        'key',
        'name', 
        'slug',
        'description',
        'is_active',
        'is_free',
        'level',
        'category_id',
        'coursable_id',
        'coursable_type',
    ];

    public function coursable(): MorphTo
    {
        return $this->morphTo();
    }

    public function schedules(): MorphMany
    {
        return $this->morphMany(Schedule::class, 'scheduleable');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'category_id', 'id');
    }
}
