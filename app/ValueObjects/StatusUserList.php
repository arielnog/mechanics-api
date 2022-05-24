<?php

namespace App\ValueObjects;

class StatusUserList
{
    const ACTIVE = 'Ativo';
    const WAITING = 'Aguardando Aprovação';
    const INACTIVE = 'Inativo';

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
