<?php

namespace App\Http\Controllers;

use App\Http\Requests\ElementRequest;
use App\Models\Element;
use App\Models\PromptText;
use Illuminate\Http\Request;
use App\Models\AnalysisCategory;

class ElementController extends Controller
{

    public function index($id)
    {
        $item = AnalysisCategory::find($id);
        return view('admin.analysis.element.index', compact('item'));
    }


    public function store(ElementRequest $request, $id)
    {
        $item = PromptText::first();
        Element::create([
            'name_hy' => $request->name_hy,
            'price' => $request->price,
            'order_by' => $request->order_by,
            'analysis_category_id' => $id,
            'prompt_text_hy' => $item->text_hy,
            'prompt_text_ru' => $item->text_ru,
            'prompt_text_en' => $item->text_en
        ]);
        return back()->with('ok', 'Ավելացված է');
    }


    public function edit($id)
    {
        $item = Element::find($id);
        return view('admin.analysis.element.edit', compact('item'));
    }


    public function update(ElementRequest $request, $id)
    {
        Element::find($id)->update($request->all());
        $item = Element::find($id);
        return redirect()->route('element.index', $item->analysis_category_id)->with('ok', 'Խմբագրված է');
    }


    public function destroy($id)
    {
        Element::find($id)->delete();
        return back()->with('ok', 'Ջնջված է');
    }
}
