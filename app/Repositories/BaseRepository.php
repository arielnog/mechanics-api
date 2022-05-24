<?php

namespace App\Repositories;

use App\Factories\Entities\EntitiesFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Ramsey\Uuid\Lazy\LazyUuidFromString as Uuid;

abstract class BaseRepository
{
    protected function __construct(
        protected Model $model
    )
    {
    }

    /**
     * @param Uuid $uuid
     * @return mixed
     */
    public function findByUuid(Uuid $uuid): mixed
    {
        return $this->model
            ->where('uuid', $uuid->toString())
            ->first();
    }

    /**
     * @param array $data
     * @return void
     */
    public function saveFromArray(array $data)
    {
        return $this->model::create($data);
    }

    /**
     * @param array $data
     * @param array $dataExcept
     * @return mixed
     */
    protected function updateFromArray(array $data,array $dataExcept): mixed
    {
        return $this->model
            ->where("uuid", $data['uuid'])
            ->update(
                Arr::except(
                    $data,
                    $dataExcept
                )
            );
    }

    /**
     * @param Uuid $uuid
     * @return mixed
     */
    protected function deleteFromUuid(Uuid $uuid): mixed
    {
        return $this->model
            ->where("uuid", $uuid->toString())
            ->delete();
    }
}
