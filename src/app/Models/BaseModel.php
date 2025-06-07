<?php

namespace App\Models;

use App\Trait\HasKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BaseModel extends Model
{
    use HasKey;

    protected $fillable = [
        'key',
        'tenant_id'
    ];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
