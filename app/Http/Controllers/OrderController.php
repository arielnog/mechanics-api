<?php

namespace App\Http\Controllers;

use App\Services\ServiceOrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function __construct(
       private ServiceOrderService $serviceOrderService
   )
   {
   }

    public function getByVehicleIdWithServices(int $vehicleId)
    {
        return $this->serviceOrderService->getByVehicleIdlistWithService($vehicleId);
   }
}
