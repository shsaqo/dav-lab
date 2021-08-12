<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $langPrefix = ltrim(request()->route()->getPrefix(), '/');
        if ($langPrefix) {
            App::setLocale($langPrefix);
            session()->put('locale', $langPrefix);
        } else {
            App::setLocale('hy');
            session()->put('locale', 'hy');
            $segments = str_replace(url('/'), '', url()->current());
            $segments = array_filter(explode('/', $segments));
            array_unshift($segments, 'hy');
            return redirect()->to(implode('/', $segments));
        }
        return $next($request);
    }
}
