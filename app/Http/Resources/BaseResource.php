<?php

declare(strict_types = 1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class BaseResource extends JsonResource
{
    protected static string $collection = BaseCollection::class;

    /**
     * @var string[] $withoutFields
     * */
    protected array $withoutFields = [];

    /**
     * Set the keys that are supposed to be filtered out
     *
     * @param string[] $fields
     * @return BaseResource
     */
    public function hide(array $fields): BaseResource
    {
        $this->withoutFields = $fields;
        return $this;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array<string>
     */
    public function toArray(Request $request): array
    {
        return $this->filterFields(parent::toArray($request));
    }

    /**
     * Remove the filtered keys.
     *
     * @param array<string, array|bool|int|string|null|mixed> $array
     * @return array
     */
    protected function filterFields(array $array): array
    {
        return collect($array)->forget($this->withoutFields)->toArray();
    }

    /**
     * Accessing resource getters from collections
     *
     * @param string $name
     * @return string|int
     */
    protected function getAttribute(string $name): int|string
    {
        $getter = 'get' . ucfirst(Str::camel($name));
        return $this->$getter();
    }
}
