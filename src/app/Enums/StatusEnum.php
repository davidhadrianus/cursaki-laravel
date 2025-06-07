<?php

namespace App\Enums;

enum StatusEnum: string
{
    case ACTIVE = 'active'; // When is active
    case INACTIVE = 'inactive'; // When is inactive
    case PENDING = 'pending'; // When is pending
    case REJECTED = 'rejected'; // When is rejected
    case CANCELLED = 'cancelled'; // When is cancelled
    
    public function label(): string
    {
        return match($this) {
            self::ACTIVE => 'Activo',
            self::INACTIVE => 'Inactivo',
            self::PENDING => 'Pendiente',
            self::REJECTED => 'Rejeitado',
            self::CANCELLED => 'Cancelado',
        };
    }
}
