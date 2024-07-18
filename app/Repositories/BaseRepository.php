<?php

declare(strict_types = 1);

namespace App\Repositories;

use App\Contracts\Repositories\EloquentRepositoryContract;
use App\DTO\LogDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements EloquentRepositoryContract
{
    /**
     * @param Model $model
     * @return void
     */
    public function __construct(private readonly Model $model)
    {

    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function __call($method, $parameters): mixed
    {
        return $this->model->$method(...$parameters);
    }

    /**
     * @param null $model
     * @return Model
     */
    public function getModel($model = null): Model
    {
        if (empty($model)) {
            return $this->model;
        }

        if ($model instanceof $this->model) {
            return $model;
        }

        return $this->findOrFail($model);
    }

    /**
     * @return Collection
     */
    public function show(): Collection
    {
        return $this->model->get();
    }

    /**
     * @param LogDto $data
     * @return Model
     */
    public function create(LogDto $data): Model
    {
        return $this->model->create($data->toArray());
    }

    /**
     *
     * @param $id
     * @return void
     */
    public function delete($id): void
    {
        $instance = $this->getModel($id);

        $instance->delete();
    }
}
