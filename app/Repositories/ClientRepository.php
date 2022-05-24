<?php

namespace App\Repositories;

use App\Entities\Client as ClientEntity;
use App\Models\Client;
use App\Models\Client as ClientModel;
use Exception;
use Faker\Provider\Base;
use Illuminate\Support\Arr;


class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{
    public function __construct(
        Client $model
    )
    {
        parent::__construct(
            $model
        );
    }
}
