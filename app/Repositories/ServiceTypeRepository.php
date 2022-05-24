<?php

namespace App\Repositories;

use App\Models\ServiceType;


class ServiceTypeRepository extends BaseRepository implements MechanicRepositoryInterface
{

    public function __construct(
        ServiceType $model
    )
    {
        parent::__construct(
            $model
        );
    }
}
