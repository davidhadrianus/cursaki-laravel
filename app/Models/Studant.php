<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use App\Enums\GenderEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Studant extends Model
{
    /** @use HasFactory<\Database\Factories\StudantFactory> */
    use HasFactory, HasKey, HasSlug, SoftDeletes;

    protected $fillable = [
        'key',
        'name', 
        'nickname', 
        'slug',
        'nif',
        'description',
        'gender',
        'is_active',
        'joined_at',
        'left_at',
        'user_id'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'gender' => GenderEnum::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    
    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }
}
