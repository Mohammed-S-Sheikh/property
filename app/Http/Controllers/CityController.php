<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return response()->success(City::all());
    }

    public function store(CityRequest $request)
    {
        City::create($request->validated());

        return response()->ok();
    }

    public function show(City $city)
    {
        return $city;
    }

    public function update(CityRequest $request, City $city)
    {
        $city->update($request->validated());

        return response()->ok();
    }

    public function destroy(City $city)
    {
        $city->delete();

        return response()->ok();
    }
}
