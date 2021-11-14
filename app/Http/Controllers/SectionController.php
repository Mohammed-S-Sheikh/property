<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        return $this->recursive(1, '/');

        return response()->success(Section::all());
    }

    public function store(Request $request)
    {
        Section::create($request);

        return response()->ok();
    }

    public function show(Section $section)
    {
        return $section;
    }

    public function update(Request $request, Section $section)
    {
        $section->update($request->toArray());

        return response()->ok();
    }

    public function destroy(Section $section)
    {
        $section->delete();

        return response()->ok();
    }

    private function recursive($order, $path)
    {
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
