<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Models\Section;

class SectionController extends Controller
{
    public function index()
    {
        // $sections = Section::query()
        //                     ->where('order', 1)
        //                     ->get();

        // $data = collect($sections)
        //         ->map(function($item) {
        //             $subSections = Section::query()
        //                                     ->where('order', 2)
        //                                     ->where('path', 'LIKE', $item->path . '%')
        //                                     ->get();

        //             return [
        //                 'id' => $item->id,
        //                 'name_ar' => $item->name_ar,
        //                 'name_en' => $item->name_en,
        //                 'path' => $item->path,
        //                 'order' => $item->order,
        //                 'subs' => $subSections
        //             ];
        //         });

        return response()->success(Section::all());
    }

    public function store(SectionRequest $request)
    {
        Section::create($request->validated());

        return response()->ok();
    }

    public function show(Section $section)
    {
        return $section;
    }

    public function update(SectionRequest $request, Section $section)
    {
        $section->update($request->validated());

        return response()->ok();
    }

    public function destroy(Section $section)
    {
        $section->delete();

        return response()->ok();
    }

    private function recursive($order, $path)
    {

        // IN ORDER TO IMPLEMENT THIS METHOD, PUT THIS COMMENTED
        // CODE IN OTHER METHOD :

        // $mainSections = Section::where('order', 1)->get();
        // $data = [];
        // foreach ($mainSections as $section)
        // {
        //     array_push($data, $this->recursive(1, $section->path));
        // }

        $sections = Section::query()
                            ->where('order', $order)
                            ->where('path', 'LIKE', $path . '%')
                            ->get();

        $data = null;

        if($sections->isNotEmpty()) {
            $data = collect($sections)
                    ->map(function($item) {
                        return [
                            'id' => $item->id,
                            'name_ar' => $item->name_ar,
                            'name_en' => $item->name_en,
                            'path' => $item->path,
                            'order' => $item->order,
                            'subs' => $this->recursive($item->order + 1, $item->path)
                        ];
                    });
        }

        return $data;
    }
}
