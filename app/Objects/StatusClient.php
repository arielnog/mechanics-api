<?php

namespace App\Objects;

use App\ValueObjects\StatusClientList;
use Exception;

class StatusClient
{
    /**
     * @throws Exception
     */
    public function __construct(
        private string $status
    )
    {
        $this->validate();
    }

    public function validate(): void
    {
        if (!in_array($this->status, StatusClientList::validValues())) {
            throw new Exception('Status Inválido');
        }
    }

    public function asString(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->asString();
    }
}
