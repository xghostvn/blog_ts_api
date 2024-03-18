<?php

namespace App\Traits;

trait ApiResponse
{
    public function sendErrorResponse($message, $errors = null, $code = 400)
    {
        return response()->json([
            'message' => $message,
            'errors' => $errors,
            "success" => false
        ], $code);
    }

    public function sendSuccessResponse($data, $message = 'success', $code = 200)
    {
        return response()->json([
            'status_code' => $code,
            'message' => $message,
            "success" => true,
            "data" => $data
        ])->cookie("access_token", "123");
    }
}
