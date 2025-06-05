<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
    /** @use HasFactory<\Database\Factories\InstitutionFactory> */
    use HasFactory, HasKey, HasSlug, SoftDeletes;

    protected $fillable = [
        'key',
        'name',
        'slug',
        'is_active',
        'nif',
        'user_id'
    ];

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    # realationships

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }

    public function courses(): MorphMany
    {
        return $this->morphMany(Course::class, 'coursable');
    }

    public function teachers(): MorphMany
    {
        return $this->morphMany(Teacher::class, 'teachable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
