<?php

namespace App\Http\Controllers;

use App\Services\VehicleBrandService;
use App\Services\VehicleService;
use App\Services\VehicleModelService;
use Illuminate\Http\Request;
use Exception;

class VehicleController extends Controller
{
    public function __construct(
        private VehicleService $vehicleClientService
    ) {
    }

    public function getVehiclesByClient(Request $request)
    {
        return $this->vehicleClientService->getVehiclesByClientId($request->query('clientValue'));
    }

    public function listBrand()
    {
        return $this->vehicleClientService
            ->listAllBrand();
    }

    public function listModel($brandId)
    {
        return $this->vehicleClientService
            ->listAllModel($brandId);
    }

    public function save(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $vehicle = $this->vehicleClientService->save($request->all());
            return response()->json(
                [
                    'message' => 'Veiculo Criado com sucesso',
                    'context' => $vehicle
                ],
                200
            );
        } catch (Exception $exception) {
            return response()->json(
                $exception->getMessage(),
                400
            );
        }
    }
}
