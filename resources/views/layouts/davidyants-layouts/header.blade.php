<header class="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <ul data-da=".top-header-mobile_branches, 991.98, last" class="top_header-list">
                    <li class="top_header-list__items"><a class="top_header-list__items_city" id="yerevan-map" href="{{ route('contact') }}/#tab-1">{{ __('index.yerevan') }}</a></li>
                    <li class="top_header-list__items"><a class="top_header-list__items_city" id="gyumri-map" href="{{ route('contact') }}/#tab-4">{{ __('index.gyumri') }}</a></li>
                    <li class="top_header-list__items"><a class="top_header-list__items_city" id="vanadzor-map" href="{{ route('contact') }}/#tab-3">{{ __('index.vanadzor') }}</a></li>
                    <li class="top_header-list__items"><a class="top_header-list__items_city" id="stepanakert-map" href="{{ route('contact') }}/#tab-6">{{ __('index.stepanakert') }}</a> </li>
                    <li class="top_header-list__items"><a class="top_header-list__items_city" id="sevan-map" href="{{ route('contact') }}/#tab-5">{{ __('index.sevan') }}</a> </li>
                    <li class="top_header-list__items dropdown-item"><a href="#">@if(session()->get('locale') == 'ru') Ру @elseif(session()->get('locale') == 'en') En @else Հայ @endif <svg xmlns="http://www.w3.org/2000/svg" width="9.305" height="5.403" viewBox="0 0 9.305 5.403"><path d="M15.684,11.5l-3.592,3.592L8.5,11.5" transform="translate(-7.439 -10.439)" fill="none" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/></svg></a>
                        <ul class="dropdown-lang-list"  data-da='.top-header-mobile_lang, 991.98, last'>
                            <li class="dropdown-lang-list__items @if(session()->get('locale') == 'hy') active @endif"><a href="{{ route('lang','hy') }}">Հայերեն</a></li>
                            <li class="dropdown-lang-list__items @if(session()->get('locale') == 'ru') active @endif"><a href="{{ route('lang','ru') }}">Русский</a></li>
                            <li class="dropdown-lang-list__items @if(session()->get('locale') == 'en') active @endif"><a href="{{ route('lang','en') }}">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <nav class="header-nav">
                    <a href="{{ route('home.page') }}" class="header-logo" aria-label="Davidyants Laboratories"><img src="{{ asset('davlab/img/logo.svg') }}" alt=""></a>
                    <button class="icon-wrapper" aria-label="Mobile menu">
                           <span class="icon-humburger">
                           </span>
                    </button>
                    <ul class="nav-list" data-da=".header-mobile-container, 991.98, first">
                        <li class="nav-list__items">
                            <a id="main-page" href="{{ route('home.page') }}">{{ __('index.mainPage') }}</a>
                        </li>
                        <li class="nav-list__items">
                            <a id="about-page" href="{{ route('about.page') }}">{{ __('index.about') }}</a>
                        </li>
                        <li class="nav-list__items">
                            <a id="analyse-page" href="{{ route('price') }}">{{ __('index.analysisPrice') }}</a>
                        </li>
                        <li class="nav-list__items">
                            <a id="news-page" href="{{ route('news.page') }}" >{{ __('index.news') }}</a>
                        </li>
                        <li class="nav-list__items">
                            <a id="contact-page" href="{{ route('contact') }}">{{ __('index.contacts') }}</a>
                        </li>
                        <li class="nav-list__items">
                            <a href="{{ route('covid') }}">Covid 19</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-mobile-container">
                    <div class="mobile-branches-container">
                        <div class="top-header-mobile_branches">
                            <button class="accordeon-btn">{{ __('index.branches') }} <img src="{{ asset('davlab/img/icons/menu-arrow.svg') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="mobile-branches-container">
                        <div class="top-header-mobile_branches top-header-mobile_lang">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
