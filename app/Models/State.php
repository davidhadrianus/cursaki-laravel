<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    use HasKey;
    use HasSlug;
    use SoftDeletes;

    protected $fillable = [
        'key',
        'title',
        'slug',
        'population',
        'code',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(
            related: City::class,
            foreignKey: 'state_id'
        );
    }

}
