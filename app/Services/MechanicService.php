<?php

namespace App\Services;

use App\Entities\Mechanic;
use App\Factories\Entities\MechanicFactory;
use App\Repositories\MechanicRepository;
use Exception;
use Ramsey\Uuid\Lazy\LazyUuidFromString as Uuid;

class MechanicService
{

    public function __construct(
        protected MechanicRepository $mechanicRepository
    )
    {
    }

    /**
     * @throws Exception
     */
    public function findByUuid(Uuid $mechanicUuid): ?Mechanic
    {
        try {
            $mechanicModel = $this->mechanicRepository->findByUuid($mechanicUuid);

            if (is_null($mechanicModel)) {
                return null;
            }

            return MechanicFactory::fromModel($mechanicModel);
        } catch (Exception $exception) {
            throw new Exception(
                $exception->getMessage(),
                $exception->getCode()
            );
        }
    }

    /**
     * @throws Exception
     */
    public function createMechanic(array $request)
    {
        try {
            $mechanicEntities = MechanicFactory::fromArray($request);
             $this->mechanicRepository->saveFromArray($mechanicEntities->toArray());
        } catch (Exception $exception) {
            throw new Exception(
                $exception->getMessage()
            );
        }
    }

}

