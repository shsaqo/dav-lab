<?php


namespace App\Development;


use App\Models\AnalysisCategory;
use Illuminate\Http\Request;

class Search
{
    public static function search (Request $request) {
        if (isset($request->search)) {
            $categories = AnalysisCategory::where('name_hy', 'LIKE', '%'. $request->search .'%')
                ->orWhere('name_ru', 'LIKE', '%'. $request->search .'%')
                ->orWhere('name_en', 'LIKE', '%'. $request->search .'%')
                ->orWhereHas('element', function ($q) use($request) {
                    $q->where('name_hy', 'LIKE', '%'. $request->search .'%')
                        ->orwhere('name_ru', 'LIKE', '%'. $request->search .'%')
                        ->where('name_en', 'LIKE', '%'. $request->search .'%');
                })
                ->orWhereHas('child', function ($q) use ($request) {
                    $q->where('name_hy', 'LIKE', '%'. $request->search .'%')
                        ->orwhere('name_ru', 'LIKE', '%'. $request->search .'%')
                        ->orWhere('name_en', 'LIKE', '%'. $request->search .'%');
                })
                ->orWhereHas('child', function ($q) use ($request) {
                    $q->whereHas('element', function ($q) use ($request) {
                        $q->where('name_hy', 'LIKE', '%'. $request->search .'%')
                            ->orwhere('name_ru', 'LIKE', '%'. $request->search .'%')
                            ->orWhere('name_en', 'LIKE', '%'. $request->search .'%');
                    });

                })
                ->with('child', 'element')->ordering()->get();
        } else {
            $categories = AnalysisCategory::with('child', 'element')->ordering()->get();

        }
        return $categories;
    }
}
