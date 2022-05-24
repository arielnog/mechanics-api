<?php

namespace App\Factories\Entities;

use App\Entities\Client;
use App\Entities\Service;
use DateTime;
use Exception;
use Ramsey\Uuid\Uuid;


class ServiceFactory
{

    /**
     * @param array $data
     * @return Client
     * @throws Exception
     */
    public static function fromArray(array $data): Service
    {
        return new Service(
            uuid: Uuid::uuid4()->toString(),
            executeDate: new DateTime($data['executeDate']),
            value: $data['valueService'],
            description: $data['descriptionService'],
            type: $data['typeService'],
            orderId: $data['orderId']
        );
    }


}
