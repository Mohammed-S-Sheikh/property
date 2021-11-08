<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->success(User::all());
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return response()->ok();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return response()->ok();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->ok();
    }
}
