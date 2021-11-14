<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pipeline\Pipeline;

class PropertyController extends Controller
{
    public function index()
    {
        return response()->success($this->filter());
    }

    public function store(Request $request)
    {
        DB::transaction(function() use($request) {

            $request['user_id'] = 1; //Auth::id();
            $property = Property::create($request->except('images'));

            app(ImageController::class)->store($request->images, $property->id);
        });

        return response()->ok();
    }

    public function show(Property $property)
    {
        return $property;
    }

    public function update(Request $request, Property $property)
    {
        DB::transaction(function() use($request, $property) {
            $property->update($request->except('images'));

            app(ImageController::class)->update($request->images, $property->id);
        });

        return response()->ok();
    }

    public function destroy(Property $property)
    {
        $property->images()->delete();
        $property->delete();

        return response()->ok();
    }

    public function types()
    {
        return DB::table('properties')->select('type')->distinct()->get();
    }

    public function filter()
    {
        return app(Pipeline::class)
                ->send(Property::query())
                ->through([
                    \App\QueryFilters\Property\City::class,
                    \App\QueryFilters\Property\Name::class,
                    \App\QueryFilters\Property\Note::class,
                    \App\QueryFilters\Property\Number::class,
                    \App\QueryFilters\Property\Price::class,
                    \App\QueryFilters\Property\Region::class,
                    \App\QueryFilters\Property\Section::class,
                    \App\QueryFilters\Property\Sold::class,
                    \App\QueryFilters\Property\Title::class,
                    \App\QueryFilters\Property\Type::class,
                    \App\QueryFilters\Property\User::class,
                ])
                ->thenReturn()
                ->get();
    }
}
