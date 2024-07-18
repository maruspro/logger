<?php

declare(strict_types = 1);

namespace App\Services\Log;

use App\Contracts\Repositories\EloquentRepositoryContract;
use App\Contracts\Services\Log\BaseServiceContract;
use App\DTO\LogDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseService implements BaseServiceContract
{
    public function __construct(private $contract)
    {

    }

    /**
     * @return Collection
     */
    public function show(): Collection
    {
        return $this->contract->get();
    }

    /**
     * @param LogDto $data
     * @return Model
     */
    public function create(LogDto $data): Model
    {
        return $this->contract->create($data);
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $this->contract->delete($id);
    }
}
