<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class LocaleController extends Controller
{
    public function setLocale ($locale)
    {
        if (! in_array($locale, config('app.locales'))) {
            abort(400);
        }
        App::setLocale($locale);
        session()->put('locale', $locale);
        $segments = str_replace(url('/'), '', url()->previous());
        $segments = array_filter(explode('/', $segments));
        if(count($segments) == 0) {
            array_unshift($segments, $locale);
            return redirect()->to(implode('/hy', $segments));
        } elseif (count($segments) == 1 && in_array($segments[1], config('app.locales'))) {
            array_shift($segments);
            array_unshift($segments, $locale);
            return redirect()->to(implode('/', $segments));
        } elseif (count($segments) == 1 && !in_array($segments[1], config('app.locales'))) {
            array_unshift($segments, $locale);
            return redirect()->to(implode('/', $segments));
        }
        array_shift($segments);
        array_unshift($segments, $locale);
        return redirect()->to(implode('/', $segments));





    }
}
