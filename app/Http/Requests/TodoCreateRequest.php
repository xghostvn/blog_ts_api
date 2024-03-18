<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstracts\ApiBaseRequest;

class TodoCreateRequest extends ApiBaseRequest
{



    public function rules(): array
    {
        return [
            //
            "name" => "required|string|max:255",

        ];
    }
}
