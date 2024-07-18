<?php

declare(strict_types = 1);

namespace App\DTO;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Contracts\Support\Arrayable;

abstract class BaseDto implements Jsonable, Arrayable
{
    /**
     * @param array $data
     * @return void
     * @throws Exception
     */
    public function __construct(array $data = [])
    {
        foreach ($data as $key => $datum) {
            $this->set($key, $datum);
        }
    }

    /**
     * @throws Exception
     */
    public function __set($name, $value)
    {
        $this->set($name, $value);
    }

    /**
     * @throws Exception
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function toArray(): array
    {
        $arr = [];
        foreach ($this->getProperties() as $key) {
            if (isset($this->$key)) {
                $arr[Str::snake($key)] = $this->get($key);
            }
        }
        return $arr;
    }


    /**
     * @param int $options
     * @return bool|string
     * @throws Exception
     */
    public function toJson($options = 0): bool|string
    {
        return json_encode($this->toArray(), $options);
    }

    /**
     *
     * @param string $name
     * @return mixed
     * @throws Exception
     */
    public function get(string $name): mixed
    {
        $property = Str::camel($name);
        if (property_exists($this, $property)) {
            return $this->{$property};
        }

        throw new Exception('Property ' . $property . ' does not exist on ' . get_class($this));
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return void
     * @throws Exception
     */
    public function set(string $name, mixed $value): void
    {
        $property = Str::camel($name);
        if (!property_exists($this, $property)) {
            throw new Exception('Can\'t set property ' . $property . ' that does not exist on ' . get_class($this));
        }
        $this->{$property} = $value;
    }

    /**
     * @return array
     */
    private function getProperties(): array
    {
        return array_keys(get_object_vars($this));
    }
}
