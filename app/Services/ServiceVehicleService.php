<?php

namespace App\Services;

use App\Factories\Entities\ServiceFactory;
use App\Factories\Entities\ServiceOrderFactory;
use App\Repositories\ServiceOrderRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;


class ServiceVehicleService

{
    public function __construct(
        private ServiceRepositoryInterface $serviceRepository,
        private ServiceOrderRepositoryInterface $orderRepository
    ) {
    }

    /**
     * @throws Exception
     */
    public function save(array $params, int $vehicleId)
    {
        if (empty($params['orderId'])) {
            return $this->createWithoutOrder($params, $vehicleId);
        }

        return $this->serviceRepository->save(ServiceFactory::fromArray($params['service']));
    }

    /**
     * @throws Exception
     */
    private function createWithoutOrder(array $params, int $vehicleId)
    {
        $orderParams = [
            'vehicleId' => $vehicleId,
            'customerReport' => "Serviço criado sem ordem de serviço"
        ];

        DB::transaction(function () use ($params, $orderParams) {
            try {
                $order = $this->orderRepository
                    ->save(ServiceOrderFactory::fromArray($orderParams));

                if (empty($order)) {
                    throw new Exception('Não foi possível criar a ordem');
                }

                $params['orderId'] = $order->id;


                $service = $this->serviceRepository
                    ->save(ServiceFactory::fromArray($params));
                DB::commit();
                return $service;
            } catch (Exception $exception) {
                DB::rollBack();
                throw new Exception($exception->getMessage());
            }
        });
    }

    public function update(int $serviceId, array $params)
    {
        return $this->serviceRepository->update($serviceId, ServiceFactory::fromArray($params['service']));
    }

    public function delete(int $serviceId)
    {
        return $this->serviceRepository->delete($serviceId);
    }


}
