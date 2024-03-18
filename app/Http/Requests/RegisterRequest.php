<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstracts\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends ApiBaseRequest
{



    public function rules(): array
    {
        return [
            //
            "name" => "required|string|max:255",
            "email" => "required|string|email|unique:users,email",
            "password" => "required|string|confirmed"
        ];
    }
}
