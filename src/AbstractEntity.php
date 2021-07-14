<?php

namespace BackerClub\IndiegogoApiClient;

use DateTimeInterface;
use JsonSerializable;

abstract class AbstractEntity implements JsonSerializable
{
    public function __construct(object $data = null)
    {
        if (!is_null($data)) {
            $this->hydrate($data);
        }
    }

    public function toArray(): array
    {
        $getterMethods = array_filter(
            get_class_methods($this),
            fn(string $method) => str_starts_with($method, 'get') && $method !== 'getSetterMethod'
        );

        $data = [];

        foreach ($getterMethods as $getterMethod) {
            $key = lcfirst(str_replace('get', '', $getterMethod));

            $value = $this->{$getterMethod}();

            if ($value instanceof DateTimeInterface) {
                $data[$key] = $value->format(DateTimeInterface::ATOM);
                continue;
            }

            if ($value instanceof self) {
                $data[$key] = $value->toArray();
                continue;
            }

            if (is_array($value) && count($value) > 0 && $value[0] instanceof self) {
                $data[$key] = array_map(fn($innerValue) => $innerValue->toArray(), $value);
                continue;
            }

            $data[$key] = $value;
        }

        return $data;
    }

    public function hydrate(object $options): static
    {
        $methods = get_class_methods($this);

        foreach ($options as $key => $value) {
            $method = $this->getSetterMethod($key);

            if (in_array($method, $methods, true)) {
                $this->$method($value);
            }
        }

        return $this;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    private function getSetterMethod($propertyName): string
    {
        return "set" . str_replace(' ', '', ucwords(str_replace('_', ' ', $propertyName)));
    }
}
