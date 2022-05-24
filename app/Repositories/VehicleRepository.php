<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository extends BaseRepository implements VehicleRepositoryInterface
{
    public function __construct(
        Vehicle $model
    )
    {
        parent::__construct(
            $model
        );
    }

    public function list()
    {
        return $this->vehicle
            ->with('client')
            ->get()
            ->toArray();
    }

    /**
     * @param int $clientId
     * @return null
     */
    public function getByClientId(int $clientId)
    {
        $vehicle = $this->vehicle
            ->with(['vehicleBrand', 'vehicleModel'])
            ->where('client_id', $clientId)
            ->get()
            ->toArray();

        if (empty($vehicle)) {
            return null;
        }

        return $vehicle;
    }
}
