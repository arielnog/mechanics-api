<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\VehicleBrand;
use Exception;


class VehicleBrandRepository extends BaseRepository implements VehicleBrandRepositoryInterface
{

    public function __construct(
        VehicleBrand $model
    )
    {
        parent::__construct(
            $model
        );
    }

    /**
     * @throws Exception
     */
    public function list(): array
    {
        return $this->model
            ->get()
            ->toArray();
    }
}
