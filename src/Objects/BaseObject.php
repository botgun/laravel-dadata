<?php

namespace MoveMoveApp\DaData\Objects;

use ArrayIterator;
use Illuminate\Support\Arr;
use IteratorAggregate;
use JsonSerializable;
use MoveMoveApp\DaData\Exceptions\DaDataIntegrationException;
use MoveMoveApp\DaData\Helpers\Type;
use Traversable;

abstract class BaseObject implements IteratorAggregate, JsonSerializable
{
    protected array $properties;
    protected array $attributes = [];

    /**
     * @param object|array $object
     *
     * @throws DaDataIntegrationException
     */
    public function __construct(object|array $object)
    {
        if (! is_array($object) && ! is_object($object)) {
            throw new DaDataIntegrationException('Cannot cast value of type '.gettype($object).' to type '.static::class);
        }

        $this->properties = Type::cast($object, $this->attributes);
    }

    /**
     * @param object|array|null $object
     *
     * @return static
     * @throws DaDataIntegrationException
     */
    public static function create(object|array|null $object): static
    {
        if (! $object) {
            return new static([]);
        }
        return new static($object);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        return $this->properties[$key];
    }

    /**
     * @param $key
     * @param $value
     *
     * @return void
     * @throws DaDataIntegrationException
     */
    public function __set($key, $value)
    {
        if (! isset($this->attributes[$key])) {
            throw new DaDataIntegrationException('Cannot set value of unknown property '.$key);
        }
        $this->properties[$key] = Type::cast($value, $this->attributes[$key]);
    }

    /**
     * @param $key
     *
     * @return bool
     */
    public function __isset($key)
    {
        return isset($this->properties[$key]);
    }

    /**
     * @param $key
     *
     * @return void
     * @throws DaDataIntegrationException
     */
    public function __unset($key)
    {
        if (! isset($this->attributes[$key])) {
            throw new DaDataIntegrationException('Cannot set value of unknown property '.$key);
        }
        unset($this->properties[$key]);
    }

    /**
     * @return false|string
     */
    public function __toString()
    {
        return json_encode($this->toArray());
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * @return array|mixed
     */
    public function __debugInfo()
    {
        return $this->properties;
    }

    /**
     * Get associative array representation of this object.
     *
     * @return array
     */
    public function toArray(): array
    {
        return Type::strip($this->properties);
    }

    /**
     * Get associative array representation of this object.
     *
     * @return string
     */
    public function toJson(): string
    {
        return (string) $this;
    }

    /**
     * Get value(s) using dot notation.
     *
     * @param array|string $key
     * @param mixed|null $default
     * @return mixed
     */
    public function get(array|string $key, mixed $default = null): mixed
    {
        if (is_array($key)) {
            return $this->getMany($key);
        }

        return Arr::get($this->toArray(), $key, $default);
    }

    /**
     * @param $keys
     * @return array
     */
    private function getMany($keys): array
    {
        $data = [];

        foreach ($keys as $key => $default) {
            if (is_numeric($key)) {
                [$key, $default] = [$default, null];
            }

            $data[$key] = Arr::get($this->items, $key, $default);
        }

        return $data;
    }

    /**
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->properties);
    }
}
