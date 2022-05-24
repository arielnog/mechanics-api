<?php

namespace App\Repositories;

use App\Entities\Mechanic as MechanicEntities;
use App\Factories\Entities\MechanicFactory;
use App\Models\Mechanic as MechanicModel;
use App\Models\User;
use Exception;


class MechanicRepository extends BaseRepository implements MechanicRepositoryInterface
{
    /**
     * @param \App\Models\User $model
     */
    public function __construct(
        User $model
    )
    {
        parent::__construct(
            $model
        );
    }
}

