<?php

namespace App\Models;

use App\Enums\CourseLevelEnum;
use App\Enums\CourseModeEnum;
use App\Trait\HasKey;
use App\Trait\HasSlug;
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
        'mode',
        'category_id',
        'coursable_id',
        'coursable_type',
    ];

    protected $casts = [
        'level' => CourseLevelEnum::class,
        'mode' => CourseModeEnum::class
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
