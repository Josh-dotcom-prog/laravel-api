<?php

namespace App\Traits;

trait ApiResponses
{
    protected function ok($message)
    {
        return $this->success($message, 200);
    }
    protected function success($messages, $statusCode = 200)
    {
        return response()->json([
            'message' => $messages,
            'status' => $statusCode
        ]);
    }
}
