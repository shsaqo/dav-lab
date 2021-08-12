<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsFreshRequest;
use App\Models\NewsFile;
use App\Models\NewsFresh;
use App\Services\Photos\Photos;
use Illuminate\Http\Request;
use App\Development\Development;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsFreshController extends Controller
{

    public function index()
    {
        $items = NewsFresh::orderBy('id', 'DESC')->get();
        return view('admin.news.index', compact('items'));
    }


    public function create()
    {
        return view('admin.news.create');
    }


    public function store(NewsFreshRequest $request)
    {

        try {
            DB::beginTransaction();
            if (NewsFresh::formatUrl($request)) {
                return back()->with('error', 'Հղումը պետք է լինի եզակի');
            }
            Development::photoType($request);
            Development::photo($request, 'upload', 'photo');

            $news = NewsFresh::create($request->all());
            Photos::saveMultiSelectFiles($request, $news, 'newsPhotos', 'otherPhoto', 'news_other_photo', true, true);
 //           NewsFile::newsOtherPhoto($request, $news->id);
            DB::commit();
            return redirect()->route('news.index')->with('ok', 'Նորությունը Ավելացել է');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }

    }


    public function show($slug)
    {
        abort(404);
    }


    public function edit($slug)
    {
        $newsFresh = NewsFresh::where('url', $slug)->first();
        return view('admin.news.edit', ['item' => $newsFresh]);
    }


    public function update(NewsFreshRequest $request, $slug)
    {
        if (NewsFresh::updateUrl($request, $slug)) {
            return back()->withErrors(['errors' => 'Հղումը պետք է լինի եզակի']);
        }
        $item = NewsFresh::find($slug);
        Development::photoType($request);
        Development::photo($request, 'upload', 'photo');
        NewsFile::deleteNewsFiles($request);
        NewsFresh::find($slug)->update($request->all());
        Photos::saveMultiSelectFiles($request, $item, 'newsPhotos', 'otherPhoto', 'news_other_photo', true, true);
//        NewsFile::newsOtherPhoto($request, NewsFresh::where('id', $slug)->first()->id);
        return redirect()->route('news.index')->with('ok', 'Նորությունը խմբագրվել է');
    }


    public function destroy($slug)
    {
        $item = NewsFresh::where('id', $slug)->first();
        if (isset($item)) {
            Development::deleteFile($item->photo);
            Development::deleteFiles($item->newsPhotos()->pluck('id')->toArray(), 'news_files', 'news_other_photo');
            $item->newsPhotos()->delete();
            $item->delete();
        }
        return redirect()->route('news.index')->with('ok', 'Նորությունը ջնջված է');
    }
}
