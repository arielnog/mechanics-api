<?php

namespace App\Services;

use App\Factories\Entities\ServiceFactory;
use App\Factories\Entities\ServiceOrderFactory;
use App\Repositories\ServiceOrderRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;


class ServiceOrderService

{
    public function __construct(
        private ServiceOrderRepositoryInterface $orderRepository
    ) {
    }

    public function getByVehicleIdlistWithService(int $vehicleId)
    {
        return $this->orderRepository->listWithServices($vehicleId);
    }
}
