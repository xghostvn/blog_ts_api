<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Services\Todo\TodoService;

class TodoController extends Controller
{
    public function __construct(TodoService $service)
    {
        $this->service = $service;
        $this->createRequest = TodoCreateRequest::class;
    }
}
