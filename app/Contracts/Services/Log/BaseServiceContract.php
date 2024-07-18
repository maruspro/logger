<?php

declare(strict_types = 1);

namespace App\Contracts\Services\Log;

use App\DTO\LogDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseServiceContract
{
    /**
     * @return Collection
     */
    public function show(): Collection;

    /**
     * @param LogDto $data
     * @return Model
     */
    public function create(LogDto $data): Model;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}
