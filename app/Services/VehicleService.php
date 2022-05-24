<?php

namespace App\Services;

use App\Entities\Vehicle;
use App\Factories\Entities\VehicleFactory;
use App\Repositories\VehicleBrandRepositoryInterface;
use App\Repositories\VehicleModelRepositoryInterface;
use App\Repositories\VehicleRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Ramsey\Uuid\Uuid;


class VehicleService

{
    public function __construct(
        private VehicleRepositoryInterface      $vehicleRepository,
        private VehicleBrandRepositoryInterface $brandVehicleRepository,
        private VehicleModelRepositoryInterface $modelVehicleRepository
    )
    {
    }

    public function listAllBrand()
    {
        return $this->brandVehicleRepository->list();
    }


    public function listAllModel(Uuid $brandUuid)
    {


        return $this->modelVehicleRepository
            ->listByBrand($brandId);
    }

    public function getVehiclesByClientId(int $clientId)
    {
        $vehicle = $this->vehicleRepository->getByClientId($clientId);


        if (empty($vehicle)) {
            return null;
        }

        return $vehicle;
    }

    public function save(array $params)
    {
        return $this->vehicleRepository->save(VehicleFactory::fromArray($params));
    }

    public function update(int $vehicleId, array $params)
    {
        return $this->vehicleRepository->update(
            VehicleFactory::fromArray($params['vehicle'])
        );
    }

    public function delete(int $vehicleId)
    {
        return $this->vehicleRepository->delete($vehicleId);
    }

}
