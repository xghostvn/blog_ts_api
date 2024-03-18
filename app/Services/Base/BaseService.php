<?php

namespace App\Services\Base;

use App\Repositories\IBaseRepository;
use App\Traits\ApiResponse;

abstract class BaseService
{
    use ApiResponse;
    protected IBaseRepository $repository;
}
