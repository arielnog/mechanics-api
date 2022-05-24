<?php

namespace App\Entities;

use DateTime;

class Client
{
    public function __construct(
        protected string $uuid,
        protected string $fullName,
        protected ?string $nickname,
        protected ?DateTime $birthDate,
        protected ?string $email,
        protected ?string $contactPrincipal,
        protected ?string $contactAlternative,
        protected int $mechanicId,
    ) {
        $this->validate();
    }

    public function validate()
    {
    }

    /**
     * @return DateTime
     */
    public function getBirthDate(): string
    {
        return $this->birthDate->format('Y-m-d');
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'uuid' => $this->getUuid(),
            'full_name' => $this->fullName,
            'nickname' => $this->nickname,
            'birth_date' => $this->getBirthDate(),
            'email' => $this->email,
            'contact_principal' => $this->contactPrincipal,
            'contact_alternative' => $this->contactAlternative,
            'mechanic_id' => $this->mechanicId
        ];
    }
}
