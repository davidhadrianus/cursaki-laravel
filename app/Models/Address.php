<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory, HasKey, SoftDeletes;

    protected $fillable = [
        'key',
        'city_id',
        'state_id',
        'zip_code',
        'number',
        'street',
        'status',
        'complement',
        'addressable_id',
        'addressable_type',
        'team_id',
    ];

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
