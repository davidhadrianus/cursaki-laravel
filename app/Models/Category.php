<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, HasKey, HasSlug;

    protected $fillable = [
        'key',
        'name', 
        'slug',
        'description',
        'is_active'
    ];
}
