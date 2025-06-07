<?php

namespace App\Enums;

enum CourseModeEnum: string
{
    case ONLINE = 'online';
    case IN_PERSON = 'in_person';
    case HYBRID = 'hybrid';

    public function label(): string
    {
        return match ($this) {
            self::ONLINE => 'Online',
            self::IN_PERSON => 'Presencial',
            self::HYBRID => 'Híbrido',
        };
    }
}