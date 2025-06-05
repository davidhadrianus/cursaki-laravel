<?php

namespace App\Enums;

enum CourseLevelEnum: string
{
    case BEGINNER = 'BEGINNER';
    case INTERMEDIATE = 'INTERMEDIATE';
    case ADVANCED = 'ADVANCED';

    public function label(): string
    {
        return match ($this) {
            self::BEGINNER => 'Iniciante',
            self::INTERMEDIATE => 'Intermediário',
            self::ADVANCED => 'Avançado',
        };
    }
}