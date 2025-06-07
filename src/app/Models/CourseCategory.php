<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCategory extends Model
{
    /** @use HasFactory<\Database\Factories\CourseCategoryFactory> */
    use HasFactory, HasKey, HasSlug;

    protected $fillable = [
        'key',
        'name', 
        'slug',
        'description',
        'is_active'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
