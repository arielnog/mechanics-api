<?php

namespace App\Entities;

use DateTime;

class Service
{
    public function __construct(
        protected string   $uuid,
        protected DateTime $executeDate,
        protected float    $value,
        protected string   $description,
        protected string      $type,
        protected int      $orderId,
    )
    {
    }

    /**
     * @return DateTime
     */
    public function getExecuteDate(): string
    {
        return $this->executeDate->format('Y-m-d');
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'execute_date' => $this->getExecuteDate(),
            'value' => $this->value,
            'description' => $this->description,
            'type' => $this->type,
            'order_id' => $this->orderId
        ];
    }
}
