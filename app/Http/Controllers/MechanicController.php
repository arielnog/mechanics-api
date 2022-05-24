<?php

namespace App\Http\Controllers;

use App\Services\MechanicService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class MechanicController extends Controller
{

    public function __construct(
        private MechanicService $mechanicService
    )
    {
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Throwable|\Throwable
     */
    public function save(Request $request): JsonResponse
    {
        try {
            $this->mechanicService->createMechanic($request->all());
            return response()->json("usuario criado", 200);
        } catch (\Throwable $exception) {
            throw $exception;
        }
    }

    public function find(Request $request): JsonResponse
    {
        try {
            $uuid = Uuid::fromString($request->route('mechanicUuid'));

            $mechanic = $this->mechanicService->findByUuid($uuid);
            return response()->json($mechanic->toArray(), 200);
        } catch (\Throwable $exception) {
            throw $exception;
        }
    }
}
