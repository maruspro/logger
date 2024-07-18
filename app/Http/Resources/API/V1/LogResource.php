<?php

namespace App\Http\Resources\API\V1;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Request;

class LogResource extends BaseResource
{
    protected static string $collection = LogCollection::class;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->resource->id,
            'user_id'     => $this->resource->user_id,
            'client'      => $this->resource->client,
            'message'     => $this->resource->message,
            'level'       => $this->resource->level,
            'created_at'  => $this->resource->created_at
        ];
    }
}
