<?php

namespace App\Services\FactoryParttern;

use App\Repositories\User\UserRepository;

class FactoryParttern
{
    /**
     * @throws \Exception
     */
    public static function createVehicle(string $type) : Vehicle
    {
        return match ($type) {
            "car" => new Car(),
            "bike" => new Bike(new UserRepository()),
            default => throw new \Exception("Cannot create Vehicle"),
        };
    }
}
