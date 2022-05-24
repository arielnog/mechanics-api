<?php

namespace App\Entities;

use DateTime;

use function Symfony\Component\Translation\t;

class ServiceOrder
{
    public function __construct(
        protected string $uuid,
        protected int $vehicleId,
        protected string $customerReport
    ) {
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
            'uuid' => $this->uuid,
            'vehicle_id' => $this->vehicleId,
            'customer_report' => $this->customerReport
        ];
    }
}
