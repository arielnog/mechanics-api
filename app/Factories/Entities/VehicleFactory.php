<?php

namespace App\Factories\Entities;

use App\Entities\Vehicle;
use App\Models\Vehicle as ClientVehicleModel;
use Ramsey\Uuid\Uuid;


class VehicleFactory
{
    /**
     * @param array $data
     * @return Vehicle
     */
    public static function fromArray(array $data): Vehicle
    {
        return new Vehicle(
            id: $data['id'] ?? null,
            uuid: Uuid::uuid4()->toString(),
            licensePlate: $data['licensePlate'],
            motor: $data['motor'],
            year: $data['year'],
            mileage: $data['mileage'],
            brand: $data['brand'],
            model: $data['model'],
            type: $data['type'],
            clientId: $data['clientId']
        );
    }

    /**
     * @param ClientVehicleModel $clientVehicleModel
     * @return Vehicle
     */
    public static function fromModel(ClientVehicleModel $clientVehicleModel): Vehicle
    {
        $clientVehicleArray = $clientVehicleModel->toArray();
        return self::fromArray($clientVehicleArray);
    }

}
