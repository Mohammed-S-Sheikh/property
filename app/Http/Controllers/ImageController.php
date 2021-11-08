<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use App\Models\Property;
use Exception;

class ImageController extends Controller
{
    public function index()
    {
        return response()->success(Image::all());
    }

    public function store($images, $property_id)
    {
        if( ! is_dir(public_path(Property::path()))) {
            mkdir(public_path(Property::path()), 0777, true);
        }

        collect($images)
        ->each(function($image, $key) use($property_id) {

            $name = time() . $key . '.' . $image->extension();

            $image->move(public_path(Property::path()), $name);

            Image::create([
                'url' => '/public'. Property::path() . $name,
                'imageable_id' => $property_id,
                'imageable_type' => Property::class,
            ]);
        });

        return response()->ok();
    }

    public function show(Image $image)
    {
        return $image;
    }

    public function update($images, $property_id)
    {
        collect($images)
        ->each(function($image, $key) use($property_id) {

            $name = time() . $key . '.' . $image->extension();

            $image->move(public_path(Property::path()), $name);

            Image::create([
                'url' => '/public'. Property::path() . $name,
                'imageable_id' => $property_id,
                'imageable_type' => Property::class,
            ]);
        });

        return response()->ok();
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return response()->ok();
    }
}
