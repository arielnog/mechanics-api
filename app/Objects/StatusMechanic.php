<?php

namespace App\Objects;

use App\ValueObjects\StatusMechanicsList;
use Exception;

class StatusMechanic
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

    /**
     * @throws Exception
     */
    public function validate(): void
    {
        if (!in_array($this->status, StatusMechanicsList::validValues())) {
            throw new Exception(

            );
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
