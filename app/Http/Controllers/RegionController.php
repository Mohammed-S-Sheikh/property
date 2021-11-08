<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Models\Region;

class RegionController extends Controller
{
    public function index()
    {
        return response()->success(Region::all());
    }

    public function store(RegionRequest $request)
    {
        Region::create($request->validated());

        return response()->ok();
    }

    public function show(Region $region)
    {
        return $region;
    }

    public function update(RegionRequest $request, Region $region)
    {
        $region->update($request->validated());

        return response()->ok();
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return response()->ok();
    }
}
