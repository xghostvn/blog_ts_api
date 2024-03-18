<?php

namespace App\Http\Controllers;

use App\Services\FactoryParttern\FactoryParttern;

class VehicleController
{

    public function __construct()
    {
        dd("not here");
    }

    /**
     * @throws \Exception
     */
    public function vehicle(): void
    {
        $vehicle = FactoryParttern::createVehicle("car");
    }


}
