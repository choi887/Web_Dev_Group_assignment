<?php

namespace App;

enum OrderStatus: string
{
    case FINISHED = 'finished';
    case ONGOING = 'ongoing';
    case CANCELLED = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::CANCELLED => 'cancelled',
            self::FINISHED => 'finished',
            self::ONGOING => 'ongoing',
        };
    }
}
