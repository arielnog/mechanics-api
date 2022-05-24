<?php

namespace App\Http\Controllers;

use App\Services\ServiceVehicleService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(
        private ServiceVehicleService $service
    ) {
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function save(Request $request): JsonResponse
    {
        try {
            $service = $this->service->save($request->all(), (int)$request->route('vehicleId'));
            return response()->json(
                [
                    'message' => "Serviço registrado com sucesso!",
                    'context' => $service
                ],
                200
            );
        } catch (\Throwable $exception) {
            return response()->json([
                'codigo' => $exception->getCode(),
                'mensagem' => $exception->getMessage()
            ], 400);
        }
    }

    /**
     * @param int $serviceId
     * @param Request $request
     * @return JsonResponse
     */
    public function update(int $serviceId, Request $request): JsonResponse
    {
        try {
            $service = $this->service->update($serviceId, $request->all());
            return response()->json($service, 200);
        } catch (\Exception $exception) {
            throw new Exception(
                $exception->getMessage(),
                $exception->getCode()
            );
        }
    }

    public function delete(int $serviceId): JsonResponse
    {
        try {
            $service = $this->service->delete($serviceId);
            return response()->json($service, 200);
        } catch (\Exception $exception) {
            return response()->json([
                'codigo' => $exception->getCode(),
                'mensagem' => $exception->getMessage()
            ], 400);
        }
    }
}
