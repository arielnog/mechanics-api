<?php

namespace App\Entities;

class Vehicle
{
    public function __construct(
        protected ?int $id,
        protected string $uuid,
        protected string $licensePlate,
        protected string $motor,
        protected string $year,
        protected ?string $mileage,
        protected string $brand,
        protected string $model,
        protected string $type,
        protected int $clientId
    ) {
    }


    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'license_plate' => $this->licensePlate,
            'motor' => $this->motor,
            'year' => $this->year,
            'mileage' => $this->mileage,
            'brand_id' => $this->brand,
            'model_id' => $this->model,
            'type' => $this->type,
            'client_id' => $this->clientId
        ];
    }
}
