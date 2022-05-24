<?php

namespace Database\Seeders;

use App\Models\VehicleBrand;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class BrandVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brandVehicles = [
            [
                "id" => 1,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BWM"
            ],
            [
                "id" => 2,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Chery"
            ],
            [
                "id" => 3,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Chevrolet"
            ],
            [
                "id" => 4,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Citroen"
            ],
            [
                "id" => 5,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Fiat"
            ],
            [
                "id" => 6,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Ford"
            ],
            [
                "id" => 7,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Honda"
            ],
            [
                "id" => 8,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Hyundai"
            ],
            [
                "id" => 9,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Jeep"
            ],
            [
                "id" => 10,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Kia"
            ],
            [
                "id" => 11,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Land Rover"
            ],
            [
                "id" => 12,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Mercedes-Benz"
            ],
            [
                "id" => 13,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Mitsubshi"
            ],
            [
                "id" => 14,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Miura"
            ],
            [
                "id" => 15,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Nissan"
            ],
            [
                "id" => 16,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Peugeot"
            ],
            [
                "id" => 17,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Renault"
            ],
            [
                "id" => 18,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Suzuki"
            ],
            [
                "id" => 19,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Toyota"
            ],
            [
                "id" => 20,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Volkswagen"
            ],
            [
                "id" => 21,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Volvo"
            ]
        ];

        foreach ($brandVehicles as $brandVehicle) {
            VehicleBrand::insert($brandVehicle);
        }
    }
}
