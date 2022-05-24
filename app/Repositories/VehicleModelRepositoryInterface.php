<?php

namespace App\Repositories;

interface VehicleModelRepositoryInterface
{
    public function listByBrand(int $brandId);
}
