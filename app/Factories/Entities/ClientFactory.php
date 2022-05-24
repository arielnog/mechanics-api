<?php

namespace App\Factories\Entities;

use App\Entities\Client;
use App\Models\Client as ClientModel;
use App\Objects\StatusClient;
use App\ValueObjects\StatusClientList;
use DateTime;
use Exception;
use Ramsey\Uuid\Uuid;


class ClientFactory
{

    /**
     * @param array $data
     * @return Client
     * @throws Exception
     */
    public static function fromArray(array $data): Client
    {
        return new Client(
            uuid: isset($data['uuid']) ? Uuid::fromString($data['uuid'])->toString() : Uuid::uuid4()->toString(),
            fullName: $data['fullName'],
            nickname: $data['nickname'],
            birthDate: new DateTime($data['birthDate']),
            email: $data['email'],
            contactPrincipal: $data['contactPrincipal'],
            contactAlternative: $data['contactAlternative'] ?? null,
                     //TODO: MUDAR DEPOIS PRA PEGAR O ID
            mechanicId: 1,
        );
    }

    /**
     * @param ClientModel $clientModel
     * @return Client
     */
    public static function fromModel(ClientModel $clientModel): Client
    {
        $clientArray = $clientModel->toArray();
        return self::fromArray($clientArray);
    }

}
