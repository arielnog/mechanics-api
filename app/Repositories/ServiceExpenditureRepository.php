<?php

namespace App\Repositories;

use App\Models\ServiceExpenditure;


class ServiceExpenditureRepository extends BaseRepository  implements ServiceExpenditureRepositoryInterface
{

    public function __construct(
        ServiceExpenditure $model
    )
    {
        parent::__construct(
            $model
        );
    }


}
