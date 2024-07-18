<?php

declare(strict_types = 1);

namespace App\Contracts\Repositories;

use App\DTO\LogDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryContract
{
    /**
     * @param null $model
     * @return Model
     */
    public function getModel($model = null): Model;

    /**
     * @return Collection
     */
    public function show(): Collection;

    /**
     *
     * @param LogDto $data
     * @return Model
     */
    public function create(LogDto $data): Model;

    /**
     *
     * @param $id
     * @return void
     */
    public function delete($id): void;
}
