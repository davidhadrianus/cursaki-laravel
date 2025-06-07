<?php

declare(strict_types=1);

namespace App\Trait;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait HasKey
{
     /**
     * The "booting" method of the trait.
     *
     * The function generates a unique UUID and assigns it to the primary key of a model during
     * creation.
     * @author David Hadrianus <jobs.hadrianus@gmail.com>
     *
     * @return void
     */
    public static function bootHasKey(): void
    {
        static::creating(function (Model $model) {
            $prefix = substr(Str::snake(class_basename($model)), 0, 3).'_';
            $uuid = $prefix . Uuid::uuid4()->getHex();
            $keyName = in_array('key', $model->fillable) ? 'key' : $model->getKeyName();
            $model->{$keyName} = substr($uuid, 0, 21);
        });
    }
}
