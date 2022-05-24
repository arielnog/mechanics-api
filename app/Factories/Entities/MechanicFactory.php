<?php

namespace App\Factories\Entities;

use App\Entities\Mechanic;
use App\Models\Mechanic as MechanicModel;
use App\Objects\Email;
use App\Objects\StatusMechanic;
use App\ValueObjects\StatusMechanicsList;
use Exception;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;


class MechanicFactory
{

    /**
     * @param array $data
     * @return Mechanic
     * @throws Exception
     */
    public static function fromArray(array $data): Mechanic
    {
        return new Mechanic(
            uuid: isset($data['uuid']) ? Uuid::fromString($data['uuid'])->toString(): Uuid::uuid4()->toString() ,
            name: $data['name'],
            email: new Email($data['email']),
            password: isset($data['password']) ? Hash::make($data['password']) : '',
            status: isset($data['status']) ?
                new StatusMechanic($data['status']) :
                new StatusMechanic(StatusMechanicsList::WAITING)
        );
    }

    /**
     * @param MechanicModel $mechanicModel
     * @return Mechanic
     * @throws Exception
     */
    public static function fromModel(MechanicModel $mechanicModel): Mechanic
    {
        return self::fromArray($mechanicModel->toArray());
    }

}
