<?php

namespace App\Enums;

enum TeacherTypeEnum: string
{
    case INDIVIDUAL = 'individual';
    case INSTITUTIONAL = 'institutional';
    case BOTH = 'both';

    public function label(): string
    {
        return match($this) {
            self::INDIVIDUAL => 'Individual',
            self::INSTITUTIONAL => 'Institucional',
            self::BOTH => 'Ambos',
        };
    }
}