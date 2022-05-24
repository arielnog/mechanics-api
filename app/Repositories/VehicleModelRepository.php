<?php

namespace App\Repositories;

use App\Models\VehicleModel;

class VehicleModelRepository extends BaseRepository implements VehicleModelRepositoryInterface
{

    public function __construct(
        VehicleModel $model
    )
    {
        parent::__construct(
            $model
        );
    }

    public function listByBrand(int $brandId)
    {
        return $this->model
            ->where('brand_id', $brandId)
            ->get()
            ->toArray();
    }

}
