<?php

namespace App\Http\Controllers;

use App\Development\Development;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\AboutEvent;
use App\Models\AboutLicense;
use App\Models\AboutPhoto;
use App\Services\Photos\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{

    public function index()
    {
        $items = About::all();
        return view('admin.about.index', compact('items'));
    }


    public function create()
    {
        return view('admin.about.create');
    }


    public function store(AboutRequest $request)
    {
        try {
            DB::beginTransaction();
            $item = About::create($request->all());
            AboutEvent::saveEvent($request, $item);
            Photos::saveMultiSelectFiles($request, $item, 'photos', 'upload', 'photo');
            Photos::saveMultiSelectFiles($request, $item, 'license', 'license', 'photo', false);
//            Development::photos($request,'about_photos', $item->id, 'upload');
//            Development::photos($request,'about_licenses', $item->id, 'license', false);
            DB::commit();
            return redirect()->route('about.index')->with('ok', 'Մեր մասին էջը ավելացել է');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return false;
        }
    }


    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }


    public function update(AboutRequest $request, About $about)
    {
        try {
            DB::beginTransaction();
            $about->update($request->all());
            AboutEvent::saveEvent($request, $about, true);
            Photos::saveMultiSelectFiles($request, $about, 'photos', 'upload', 'photo');
            Photos::saveMultiSelectFiles($request, $about, 'license', 'license', 'photo', false);
//            Development::photos($request,'about_photos', $about->id, 'upload');
//            Development::photos($request,'about_licenses', $about->id, 'license', false);
            AboutLicense::deleteAboutLicense($request);
            AboutPhoto::deleteAboutPhoto($request);

            DB::commit();
            return redirect()->route('about.index')->with('ok', 'Մեր մասին էջը խմբագրվել է');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }

    }


    public function destroy(About $about)
    {
        if ($about->photos) {
            Development::deleteFiles($about->photos()->pluck('id')->toArray(), 'about_photos', 'photo');
            $about->photos()->delete();
        }
        if ($about->license) {
            Development::deleteFiles($about->license()->pluck('id')->toArray(), 'about_licenses', 'photo');
            $about->license()->delete();
        }

        $about->delete();
        return redirect()->route('about.index')->with('ok', 'Մեր մասին էջը ջնջվել է');
    }
}
