<?php

namespace App\Services;

use App\Entities\Client;
use App\Factories\Entities\ClientFactory;
use App\Repositories\ClientRepositoryInterface;
use Exception;

class ClientService
{

    public function __construct(
        private ClientRepositoryInterface $clientRepository
    )
    {
    }

    public function listWithVehicles()
    {

        return $this->clientRepository->list();
    }

    /**
     * @throws Exception
     */
    public function save(array $params)
    {
        return $this->clientRepository->save(ClientFactory::fromArray($params));
    }

    /**
     * @throws Exception
     */
    public function update(string $clientUuid, array $data)
    {
        return $this->clientRepository->update(
            $clientId,
            ClientFactory::fromArray($data)
        );
    }

    public function delete(int $clientId)
    {
        return $this->clientRepository->delete($clientId);
    }
}
