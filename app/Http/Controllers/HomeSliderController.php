<?php

namespace App\Http\Controllers;

use App\Development\Development;
use App\Http\Requests\HomeSliderRequest;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeSliderController extends Controller
{

    public function index()
    {
        $items = HomeSlider::orderBy('id', 'DESC')->get();
        return view('admin.home-slider.index', compact('items'));
    }


    public function create()
    {
        return view('admin.home-slider.create');
    }


    public function store(HomeSliderRequest $request)
    {
        Development::photoType($request);
        Development::photo($request, 'upload', 'photo');
        HomeSlider::create($request->all());
        return redirect()->route('home-slider.index')->with('ok', 'Սլայդերը ավելացել է');
    }


    public function edit(HomeSlider $homeSlider)
    {
        return view('admin.home-slider.edit', ['item' => $homeSlider]);
    }


    public function update(HomeSliderRequest $request, HomeSlider $homeSlider)
    {
        Development::photoType($request);
        Development::photo($request, 'upload', 'photo');
        $homeSlider->update($request->all());
        return redirect()->route('home-slider.index')->with('ok', 'Սլայդերը խմբագրվել է');
    }


    public function destroy(HomeSlider $homeSlider)
    {
        File::delete(public_path('images/'.$homeSlider->photo));
        $homeSlider->delete();
        return back()->with('ok', 'Սլայդերը ջնջվեց');
    }
}
