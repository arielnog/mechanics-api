<?php

namespace App\Factories\Entities;

use App\Entities\ServiceOrder;
use Exception;
use Ramsey\Uuid\Uuid;


class ServiceOrderFactory
{

    /**
     * @param array $data
     * @return ServiceOrder
     * @throws Exception
     */
    public static function fromArray(array $data): ServiceOrder
    {
        return new ServiceOrder(
            uuid: Uuid::uuid4()->toString(),
            vehicleId: $data['vehicleId'],
            customerReport: $data['customerReport']
        );
    }


}
