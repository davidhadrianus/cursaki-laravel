<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(function (Model $model) {
            $model->slug = static::generateUniqueSlug($model);
        });

        static::updating(function (Model $model) {
            if ($model->isDirty('title') || $model->isDirty('name')) {
                $model->slug = static::generateUniqueSlug($model, $model->id);
            }
        });
    }

    protected static function generateUniqueSlug(Model $model, ?int $excludeId = null): string
    {
        $base = $model->title ?? $model->name ?? '';
        $slug = Str::slug($base);
        $originalSlug = $slug;
        $counter = 1;

        $query = static::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }

        while ($query->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;

            // Atualiza a query para o novo slug
            $query = static::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }

        return $slug;
    }
}
