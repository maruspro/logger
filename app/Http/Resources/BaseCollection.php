<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class BaseCollection extends ResourceCollection
{
    public $collects = BaseResource::class;

    /**
     * @param Request $request
     * @return  array<string, Collection>
     */
    public function toArray($request): array
    {
        return [
            $this->collection
        ];
    }
}
