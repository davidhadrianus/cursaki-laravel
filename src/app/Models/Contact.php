<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, HasKey;

    protected $fillable = [
        'key',
        'phone_number',
        'email',
        'is_active',
        'status',
        'contactable_id',
        'contactable_type',
        'team_id',
    ];

    public function getRouteKeyName()
    {
        return 'key';
    }

    public function contactable(): MorphTo
    {
        return $this->morphTo();
    }
}
