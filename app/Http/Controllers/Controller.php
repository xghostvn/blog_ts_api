<?php

namespace App\Http\Controllers;

use App\Http\Requests\_Abstracts\BaseRequest;
use App\Services\Base\BaseService;
use App\Traits\CrudTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, CrudTrait;

    protected BaseService $service;

    protected  $createRequest;

    protected  $updateRequest;
    protected  $deleteRequest;

    public static function staticFunc()
    {
        return 2;
    }

    public function notStaticFunc()
    {
        return 3 ;
    }

}
