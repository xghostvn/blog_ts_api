<?php

namespace App\Services\FactoryParttern;

use App\Repositories\IUserRepository;

class Bike implements Vehicle
{
    protected  $repository;
    public function __construct(IUserRepository $repository)
    {
        $this->repository = $repository;
    }
}
