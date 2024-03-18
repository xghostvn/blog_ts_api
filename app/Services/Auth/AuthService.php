<?php

namespace App\Services\Auth;

use App\Http\Requests\_Abstracts\ApiBaseRequest;
use App\Models\User;
use App\Repositories\User\IUserRepository;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class AuthService extends BaseService
{
    public function __construct(IUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function login(ApiBaseRequest $request)
    {
        $data = $request->fillData();
        try {
            $token = auth(User::API_GUARD)->attempt($data);
            if(!$token) {
                throw  new \Exception("Email and password doesnt match record !!!");
            }
            $userData = auth(User::API_GUARD)->user();

            return response()->json([
                'status_code' => 200,
                'message' => "success",
                "success" => true,
                "data" => $userData
            ])->cookie("Authorization", "Bearer ".$token, 0, null, $request->getHost(), false, true,  false,'None');
        }catch (\Exception $exception) {
            DB::rollBack();

            return  $this->sendErrorResponse($exception->getMessage());
        }

    }

    public function register(ApiBaseRequest $request)
    {
        $data = $request->fillData();
        try {
            DB::beginTransaction();

            $user = $this->repository->create($data);

            DB::commit();

            return $this->sendSuccessResponse($user);
        }catch (Exception $exception) {
            DB::rollBack();

            return  $this->sendErrorResponse($exception->getMessage());
        }
    }

    private function getCookie($token)
    {
        return cookie(
            env('AUTH_COOKIE_NAME'),
            $token,
           0,
            null,
            null,
            env('APP_DEBUG') ? false : true,
            true,
            false,
            'Strict'
        );
    }


    public function me()
    {
        $user = auth(User::API_GUARD)->user();
        return $this->sendSuccessResponse($user);
    }
}
