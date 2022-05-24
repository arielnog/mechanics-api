<?php

namespace App\ValueObjects;

class StatusMechanicsList
{
    const ACTIVE = 'Active';
    const WAITING = 'Waiting';
    const INACTIVE = 'Inactive';

    /**
     * @var array|string[]
     */
    protected array $_all = [
        self::ACTIVE,
        self::WAITING,
        self::INACTIVE
    ];

    /**
     * @return string[]
     */
    public static function validValues(): array
    {
        return [
            self::ACTIVE,
            self::WAITING,
            self::INACTIVE
        ];
    }
}
