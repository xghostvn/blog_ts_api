<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstracts\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends ApiBaseRequest
{



    public function rules(): array
    {
        return [
            //
            "email" => "required|string|email",
            "password" => "required|string|min:6|max:50"
        ];
    }
}
