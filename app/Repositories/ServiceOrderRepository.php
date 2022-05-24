<?php

namespace App\Repositories;

use App\Models\ServiceOrder;

class ServiceOrderRepository extends BaseRepository implements ServiceOrderRepositoryInterface
{
    public function __construct(
        ServiceOrderRepository $model
    )
    {
        parent::__construct(
            $model
        );
    }
}
