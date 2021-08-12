<?php

namespace App\Http\Controllers;

use App\Development\Development;
use App\Development\Search;
use App\Models\About;
use App\Models\AboutEvent;
use App\Models\AnalysisCategory;
use App\Models\Direction;
use App\Models\HomeSlider;
use App\Models\NewsFresh;
use App\Models\PromptText;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
        $locale = session()->get('locale') ?? 'hy';
        $sliders = HomeSlider::all();
        $news = NewsFresh::orderBy('id', 'desc')->limit('4')->get();
        return view('index', compact('sliders', 'locale', 'news'));
    }

    public function sing ($slug)
    {
        $locale = session()->get('locale') ?? 'hy';
        $item = NewsFresh::where('url', $slug)->first();
        abort_if(!$item, '404');
        $lastNews = NewsFresh::orderBy('id', 'desc')->limit(2)->get();
        return view('news-single', compact('item', 'locale', 'lastNews'));
    }

    public function news ()
    {
        $locale = session()->get('locale') ?? 'hy';
        $items = NewsFresh::orderBy('id', 'desc')->paginate(16);
        $containerOne = $items->take(4);
        $containerTwo = $items->skip(4);
        return view('/news', compact('containerOne', 'containerTwo', 'locale', 'items'));
    }

    public function about ()
    {
        $data_hy = array();
        $locale = session()->get('locale') ?? 'hy';
        $item = About::first();
        $itemsKey_hy = AboutEvent::where([['locale', 'hy'], ['type', 'key']])->get();
        $itemsValue_hy = AboutEvent::where([['locale', 'hy'], ['type', 'value']])->get();
        foreach ($itemsKey_hy as $index => $keys) {
            foreach ($itemsValue_hy as $index2 => $values) {
                if($index == $index2) {
                    $data_hy[] = [
                      'key' => $keys->value,
                      'value' => $values->value
                    ];
                }

            }
        }
        $itemsKey_ru = AboutEvent::where([['locale', 'ru'], ['type', 'key']])->get();
        $itemsValue_ru = AboutEvent::where([['locale', 'ru'], ['type', 'value']])->get();
        foreach ($itemsKey_ru as $index => $keys) {
            foreach ($itemsValue_ru as $index2 => $values) {
                if($index == $index2) {
                    $data_ru[] = [
                        'key' => $keys->value,
                        'value' => $values->value
                    ];
                }

            }
        }
        $itemsKey_en = AboutEvent::where([['locale', 'en'], ['type', 'key']])->get();
        $itemsValue_en = AboutEvent::where([['locale', 'en'], ['type', 'value']])->get();
        foreach ($itemsKey_en as $index => $keys) {
            foreach ($itemsValue_en as $index2 => $values) {
                if($index == $index2) {
                    $data_en[] = [
                        'key' => $keys->value,
                        'value' => $values->value
                    ];
                }

            }
        }
        $dataArray = [
          'hy' => $data_hy ?? '',
          'ru' => $data_ru ?? $data_hy,
          'en' => $data_en ?? $data_hy
        ];
        return view('/about', compact('item', 'locale', 'dataArray'));
    }

    public function price (Request $request)
    {
        $locale = session()->get('locale') ?? 'hy';
        $categories = Search::search($request);
        $prompText = PromptText::first();
        return view('price', compact('locale', 'categories', 'prompText'));
    }

    public function paperPage ()
    {
        $locale = session()->get('locale') ?? 'hy';
        $items = Direction::all();
        return view('paper-page', compact('locale', 'items'));
    }

    public function contact ()
    {
        $locale = session()->get('locale') ?? 'hy';
        return view('contact', compact('locale'));
    }

    public function covid ()
    {
        $locale = session()->get('locale') ?? 'hy';
        return view('covid', compact('locale'));
    }

    public function nonFound ()
    {
        return view('errors.404');
    }
}
