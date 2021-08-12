<?php

namespace App\Http\Controllers;

use App\Development\Development;
use App\Http\Requests\AnalysisCategoryRequest;
use App\Http\Requests\PromptTextRequest;
use App\Models\AnalysisCategory;
use App\Models\PromptText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalysisCategoryController extends Controller
{
    public function index()
    {
        $promptText = PromptText::first();
        $items = AnalysisCategory::where('parent_id', null)->with('child')->ordering()->get();
//        $items = AnalysisCategory::all();
        $categories = AnalysisCategory::where([['element_count', 0], ['parent_id', null]])->get();
        return view('admin.analysis.category.index', compact('items', 'categories', 'promptText'));
    }


    public function store(AnalysisCategoryRequest $request)
    {
        if (isset($request->parent_id) && isset($request->sub)) {
            AnalysisCategory::where('id', $request->parent_id)->increment('child_count');
            AnalysisCategory::create($request->all());
            return redirect()->route('analysis-category.index')->with('ok', 'Ենթաբաժինը ավելացել է');
        } else {
            AnalysisCategory::create($request->all());
            return redirect()->route('analysis-category.index')->with('ok', 'Տեսակը ավելացել է');

        }
    }

    public function edit(AnalysisCategory $analysisCategory)
    {
        return view('admin.analysis.category.edit', compact('analysisCategory'));
    }

    public function update(AnalysisCategoryRequest $request, AnalysisCategory $analysisCategory)
    {
        $analysisCategory->update($request->all());
        return redirect()->route('analysis-category.index')->with('ok', 'Տեսակը խմբագրված է');
    }

    public function destroy(AnalysisCategory $analysisCategory)
    {
        if($analysisCategory->parent) {
            $analysisCategory->parent()->decrement('child_count');
        }
        $analysisCategory->child()->delete();
        $analysisCategory->delete();
        return redirect()->route('analysis-category.index')->with('ok', 'Տեսակը ջնջված է');
    }

    public function promptText (PromptTextRequest $request)
    {
        PromptText::first()->update($request->all());
        return redirect()->route('analysis-category.index')->with('ok', 'Հուշող տեքստը խմբագրվել է');
    }
}
