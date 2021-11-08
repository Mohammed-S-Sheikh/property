<?php

namespace App\Mixins;

use Illuminate\Support\Facades\Response;

class JsonResponseMixin
{
    /**
     * I prefer to accept only one argument to the function,
     * otherwise writing response()->json(..); sounds better
     * since it's obvious and gives more choices and freedom
     * for programmers.
     */

    public function ok()
    {
        return fn() => response()->json(['status' => 'OK'], 200);
    }

    public function forbidden()
    {
        return fn() => response()->json(['status' => 'Forbidden'], 403);
    }

    public function success()
    {
        return fn($data) => response()->json(['data' => $data], 200);
    }

    public function error()
    {
        return fn($error) => response()->json(['error' => $error], 400);
    }
}
