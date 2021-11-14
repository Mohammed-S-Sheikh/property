<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        return response()->success(Region::all());
    }

    public function store(Request $request)
    {
        Region::create($request->all());

        return response()->ok();
    }

    public function show(Region $region)
    {
        $region['city'] = $region->city;
        unset($region->city_id);

        return $region;
    }

    public function update(Request $request, Region $region)
    {
        $region->update($request->all());

        return response()->ok();
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return response()->ok();
    }
}
