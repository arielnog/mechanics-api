<?php

namespace App\Repositories;

use App\Entities\Vehicle;

interface VehicleRepositoryInterface
{
    public function list();

    public function getByClientId(int $clientId);
}
