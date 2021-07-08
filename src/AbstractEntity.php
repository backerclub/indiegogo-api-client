<?php

namespace BackerClub\IndiegogoApiClient;

use DateTime;
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
        $data = call_user_func('get_object_vars', $this);

        foreach ($data as $key => $value) {
            if ($value instanceof DateTime) {
                $data[$key] = $value->format('Y-m-d H:i:s');
            }
        }

        return $data;
    }

    public function hydrate(object $options)
    {
        $methods = get_class_methods($this);

        foreach ($options as $key => $value) {
            if (is_null($value)) {
                // No need to set null values;
                continue;
            }
            $method = $this->getSetterMethod($key);

            if (in_array($method, $methods, true)) {
                $this->$method($value);
            }
        }

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    private function getSetterMethod($propertyName)
    {
        return "set" . str_replace(' ', '', ucwords(str_replace('_', ' ', $propertyName)));
    }
}
