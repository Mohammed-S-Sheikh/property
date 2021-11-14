<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return response()->success(City::all());
    }

    public function store(Request $request)
    {
        City::create($request->all());

        return response()->ok();
    }

    public function show(City $city)
    {
        $city['regions'] = $city->regions;

        return $city;
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->all());

        return response()->ok();
    }

    public function destroy(City $city)
    {
        $city->regions()->delete();
        $city->delete();

        return response()->ok();
    }
}
