<?php

namespace App\Objects;

use Exception;

class Email
{
    /**
     * @throws Exception
     */
    public function __construct(
        private string $email
    )
    {
        $this->setEmail($this->email);
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        if (!self::validateEmail($email)) {
            throw new Exception('Email Inválido!');
        }
    }

    public function validateEmail(string $email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public function asString(): string
    {
        return $this->email;
    }

    public function __toString()
    {
        return $this->email;
    }
}
