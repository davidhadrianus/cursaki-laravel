<?php

namespace App\Models;

use App\Trait\HasKey;
use App\Trait\HasSlug;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains, HasKey, HasSlug;

    protected $fillable = [
        'key',
        'name',
        'slug',
        'is_default'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}