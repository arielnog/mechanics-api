<?php

namespace App\Entities;

use App\Objects\Email;
use App\Objects\StatusMechanic;
use Ramsey\Uuid\Uuid;

class Mechanic
{
    /**
     * @param string $uuid
     * @param string $name
     * @param Email $email
     * @param string $password
     * @param StatusMechanic $status
     */
    public function __construct(
        protected string         $uuid,
        protected string         $name,
        protected Email          $email,
        protected string         $password,
        protected StatusMechanic $status
    )
    {
    }

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'email' => $this->email->__toString(),
            'password' => $this->password,
            'status' => $this->status->__toString()
        ];
    }
}
