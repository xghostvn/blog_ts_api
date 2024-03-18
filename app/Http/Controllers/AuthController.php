<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        return $this->service->register($request);
    }


    /**
     * @throws \Exception
     */
    public function login(LoginRequest $request): JsonResponse
    {
        return $this->service->login($request);
    }

    public function me()
    {
        return $this->service->me();
    }
}
