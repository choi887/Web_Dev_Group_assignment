<?php

namespace App;

enum Type: string
{
    case PACKAGE = 'package';
    case EVENT = 'event';
    public function label(): string
    {
        return match ($this) {
            self::PACKAGE => 'package',
            self::EVENT => 'event',
        };
    }
}
