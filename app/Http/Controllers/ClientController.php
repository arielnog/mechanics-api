<?php

namespace App\Http\Controllers;

use App\Services\ClientService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class ClientController extends Controller
{
    public function __construct(
        private ClientService $clientService,
    )
    {
    }

    public function listWithVehicles()
    {
        return $this->clientService->listWithVehicles();
    }


    public function save(Request $request): JsonResponse
    {
        try {
            $client = $this->clientService->save($request->all());
            return response()->json([
                'message' => 'Cliente Criado com sucesso',
                'context' => $client
            ], 200);
        } catch (Throwable $exception) {
            return response()->json(
                $exception->getMessage(),
                400
            );
        }
    }

    public function update(int $clientId, Request $request): JsonResponse
    {
        try {
            $client = $this->clientService->update($request->route('clientUuid'), $request->all());
            return response()->json([
                'message' => 'Cliente atualizado com sucesso',
                'context' => $client
            ], 200);
        } catch (Exception $exception) {
            return response()->json(
                $exception->getMessage(),
                400
            );
        }
    }

    public function delete(int $clientId)
    {
        try {
            $client = $this->clientService->delete($clientId);
            return response()->json(['message' => 'Cliente Criado com sucesso'], 200);
        } catch (Exception $exception) {
            return response()->json(
                $exception->getMessage(),
                400
            );
        }
    }
}
