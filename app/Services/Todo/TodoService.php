<?php

namespace App\Services\Todo;

use App\Http\Requests\_Abstracts\ApiBaseRequest;
use App\Repositories\Todo\ITodoRepository;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\DB;


class TodoService extends BaseService
{
    public function __construct(ITodoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(ApiBaseRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->fillData();

            DB::commit();

            return $this->sendSuccessResponse($data);
        }catch (\Exception $exception) {
            DB::rollBack();

            return $this->sendErrorResponse($exception->getMessage());
        }
    }
}
