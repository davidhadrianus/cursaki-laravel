<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use Domain\Address\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class City extends Model
{
    use HasKey;
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    protected $fillable = [
        'key',
        'title',
        'slug',
        'code',
        'state_id'
    ];

    public function state(): BelongsTo
    {
        return $this->belongsTo(
            related: State::class,
            foreignKey: 'state_id'
        );
    }

}
