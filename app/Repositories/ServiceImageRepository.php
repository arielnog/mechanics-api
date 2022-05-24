<?php

namespace App\Repositories;

use App\Models\ServiceImage;


class ServiceImageRepository extends BaseRepository implements ServiceImageRepositoryInterface
{

    public function __construct(
        ServiceImage $model
    )
    {
        parent::__construct(
            $model
        );
    }
}
