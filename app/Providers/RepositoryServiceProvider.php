<?php

namespace App\Providers;

use App\Repositories\ServiceOrderRepository;
use App\Repositories\ServiceOrderRepositoryInterface;
use App\Repositories\ServiceRepository;
use App\Repositories\ServiceRepositoryInterface;
use App\Repositories\VehicleBrandRepository;
use App\Repositories\VehicleBrandRepositoryInterface;
use App\Repositories\ClientRepository;
use App\Repositories\ClientRepositoryInterface;
use App\Repositories\VehicleRepository;
use App\Repositories\VehicleRepositoryInterface;
use App\Repositories\VehicleModelRepository;
use App\Repositories\VehicleModelRepositoryInterface;
use App\Repositories\MechanicRepository;
use App\Repositories\MechanicRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MechanicRepositoryInterface::class,
            MechanicRepository::class
        );

        $this->app->bind(
            ClientRepositoryInterface::class,
            ClientRepository::class
        );

        $this->app->bind(
            VehicleBrandRepositoryInterface::class,
            VehicleBrandRepository::class
        );

        $this->app->bind(
            VehicleModelRepositoryInterface::class,
            VehicleModelRepository::class
        );

        $this->app->bind(
            VehicleRepositoryInterface::class,
            VehicleRepository::class
        );

        $this->app->bind(
            ServiceRepositoryInterface::class,
            ServiceRepository::class
        );

        $this->app->bind(
            ServiceOrderRepositoryInterface::class,
            ServiceOrderRepository::class
        );

    }
}
