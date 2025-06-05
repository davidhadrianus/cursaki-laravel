<?php

namespace App\Enums;

enum ClassModeEnum: string
{
    case ONLINE = 'online';
    case OFFLINE = 'offline';
    case HYBRID = 'hybrid';

    public function label(): string
    {
        return match ($this) {
            self::ONLINE => 'Online',
            self::OFFLINE => 'Offline',
            self::HYBRID => 'Híbrido',
        };
    }
}