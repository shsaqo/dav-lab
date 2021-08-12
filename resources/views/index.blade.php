@extends('layouts.davidyants-layouts.main')
@section('content')
    <div class="page home-page">
        @include('layouts.davidyants-layouts.header')
        <main class="main">
            <section class="hero-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-swiper-container swiper-container">
                                <div class="swiper-wrapper">
                                    @if (isset($sliders) && count($sliders))
                                        @foreach ($sliders as $slider)
                                            <div class="swiper-slide">
                                                <div class="row hero-row">
                                                    <div class="col-6">
                                                        <div class="hero-section-content hero-slide-{{ $loop->iteration }}">
                                                            <h1 class="hero-title">{{ $slider['title_'.$locale] ?? $slider->title_hy }}</h1>
                                                            <p class="hero-descr">{{ $slider['description_'.$locale] ?? $slider->description_hy }}</p>
                                                            @isset ($slider->url)
                                                                <a href="{{ $slider->url }}" class="hero-btn">{{ $slider['button_'.$locale] ?? $slider->button_hy }} <img src="{{ asset('davlab/img/icons/white-arrow.svg') }}" alt=""></a>
                                                            @endisset
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div data-da=".hero-slide-{{ $loop->iteration }}, 767.98, 2" class="hero-img-or-video-content">
                                                            @if($slider->type == 1)

                                                                    <img src="{{ asset('images/'.$slider->photo) }}" alt="{{ $slider->id }}">
                                                            @else
                                                                <video width="100%" height="100%" controls>
    {{--                                                                <source src="movie.mp4" type="video/mp4">--}}
                                                                    <source src="{{ asset('images/'. $slider->photo) }}#t=0.001" type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            @endif
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="swiper-hero-button-prev"></div>
                            <div class="swiper-hero-button-next"></div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="section-our-services">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="our-services-title section-title">{{ __('index.ourServices') }}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div id="clinical_lab" class="col-20-percent">
                            <div class="our-services-item service_item" style="cursor: pointer;">
                            <div class="player-item in-mobile-show">
                                    <img src="{{asset('davlab/img/mobile-services/bottles.svg')}}" alt="">
                                </div>
                                <lottie-player src="{{ asset('davlab/js/anim-jsons/colba.json') }}"  background="transparent"  speed="1"    loop class="player-item"></lottie-player>
                                <div class="our-services-item-name">
                                    <h3>{{ __('index.generalClinical') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-20-percent">
                            <div class="our-services-item service_item">
                            <div class="player-item in-mobile-show">
                                    <img src="{{asset('davlab/img/mobile-services/lupa.svg')}}" alt="">
                                </div>
                                <lottie-player src="{{ asset('davlab/js/anim-jsons/lupa.json') }}"  background="transparent"  speed="1" loop class="player-item"></lottie-player>
                                <div class="our-services-item-name">
                                    <h3>{{ __('index.bacteriological') }}</h3>
                                </div>

                            </div>
                        </div>
                        <div class="col-20-percent">
                            <div class="our-services-item service_item">
                            <div class="player-item in-mobile-show">
                                    <img src="{{asset('davlab/img/mobile-services/dna.svg')}}" alt="">
                                </div>
                                <lottie-player src="{{ asset('davlab/js/anim-jsons/dna.json') }}"  background="transparent"  speed="1" loop class="player-item"></lottie-player>
                                <div class="our-services-item-name">
                                    <h3>{{ __('index.pshr') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-20-percent">
                            <div class="our-services-item service_item">
                            <div class="player-item in-mobile-show">
                                    <img src="{{asset('davlab/img/mobile-services/circles.svg')}}" alt="">
                                </div>
                                <lottie-player src="{{ asset('davlab/js/anim-jsons/bjij.json') }}"  background="transparent"  speed="1" loop class="player-item"></lottie-player>
                                <div class="our-services-item-name">
                                    <h3>{{ __('index.pathology') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-20-percent">
                            <div class="our-services-item modal-opener"  data-path="modal-call-modal">
                            <div class="player-item in-mobile-show">
                                    <img src="{{asset('davlab/img/mobile-services/home.svg')}}" alt="">
                                </div>
                                <lottie-player src="{{ asset('davlab/js/anim-jsons/auto.json') }}"  background="transparent"  speed="1" loop class="player-item"></lottie-player>
                                <div class="our-services-item-name">
                                    <h3>{{ __('index.homeCall') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-20-percent">
                            <div class="our-services-item service_item">
                            <div class="player-item in-mobile-show">
                                    <img src="{{asset('davlab/img/mobile-services/animals.svg')}}" alt="">
                                </div>
                                <lottie-player src="{{ asset('davlab/js/anim-jsons/animal.json') }}"  background="transparent"  speed="1" loop class="player-item"></lottie-player>
                                <div class="our-services-item-name">
                                    <h3>{{ __('index.animalAnalysis') }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title text-center">
                                {{ __('index.covid19') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="banner-section-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="banner-items">
                                    <div class="banner-items__image">
                                        <img src="{{ asset('davlab/img/icons/qr-code-green.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="banner-items__name">
                                    <h3>{{ __('index.qr') }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="banner-items">
                                    <div class="banner-items__image">
                                        <img src="{{ asset('davlab/img/icons/all-countries.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="banner-items__name">
                                    <h3>{{ __('index.allCountry') }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="banner-items">
                                    <div class="banner-items__image">
                                        <img src="{{ asset('davlab/img/icons/fast-hours.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="banner-items__name pb-long">
                                    <h3>{{ __('index.hours') }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="banner-items">
                                    <div class="banner-items__image">
                                        <img src="{{ asset('davlab/img/icons/trasnlation.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="banner-items__name pb-long">
                                    <h3>{{ __('index.translation') }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="news-title section-title">{{ __('index.news') }}</h2>
                        </div>
                        @foreach($news as $new)
                            <div class="col-6">
                            <div class="news-item">
                                <div class="row">
                                    <div class="col-6">
                                        <a  class="image-link-news" href="{{ route('sing', $new->url) }}" rel="nofollow">
                                            @if($new->type == 1)
                                                <img src="{{ asset('images/'.$new->photo) }}" alt="">
                                            @else
                                            <video width="320" height="240" controls>
                                                    <source src="{{ asset('images/'.$new->photo) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                    </video>
                                            @endif
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <h3 class="news-item-title">
                                          <a href="{{ route('sing', $new->url) }}">
                                          {{ $new['title_'.$locale] ?? $new->title_hy }}</a>
                                        </h3>
                                        <div class="news-item-text-content">
                                            <p class="news-item-text">
                                                {!! $new['text_'.$locale] ?? $new->text_hy !!}
                                            </p>
                                        </div>

                                            <div class="news-item-date">
                                                <p>{{ $new->created_at }}</p>
                                            </div>
                                        <a href="{{ route('sing', $new->url) }}" rel='nofollow' class="news-item-link">{{ __('index.more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-12 text-center">
                            <a href="{{ route('news.page') }}" class="see-more-btn">
                                {{ __('index.see') }}
                                <img src="{{ asset('davlab/img/icons/gradient-arrow.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="branches-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title">
                                {{ __('index.ourBranches') }}
                            </h3>
                        </div>
                        <div class="col-12">
                            <div class="swiper-container branches-swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide modal-opener" data-path="modal1">
                                       <div class="swiper-branches-item">
                                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('contact.city_address-1') }}</h3>
                                            <ul class="swiper-branches-item__list">
                                                <li class="swiper-branches-item__list__item">{{ __('contact.local_address-1') }}</li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.local_address_entrance') }}</li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.mon_fry') }} 09:00-16:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.sat') }} 09:00-12:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+37411200303">+374 11 20 03 03</a></li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.email') }}  <a href="mailto:davidyats.labs@gmail.com">davidyats.labs@gmail.com</a></li>
                                            </ul>
                                            <div class="branches-map-image">
                                                <img src="{{ asset('davlab/img/branches-map/sasnatsrer.png') }}" alt="">
                                            </div>
                                            <button class="branches-map-viewer modal-opener" data-path="modal1"><img src="{{ asset('davlab/img/icons/search-icon.svg') }}" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide modal-opener"  data-path="modal2">
                                        <div class="swiper-branches-item">
                                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('contact.city_address_covid') }}</h3>
                                            <ul class="swiper-branches-item__list">
                                                <li class="swiper-branches-item__list__item">{{ __('contact.local_address-2') }}</li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.mon_fry') }} 09:00-16:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.sat') }} 09:00-12:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+37411200303">+374 11 20 03 03</a></li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.email') }}  <a href="mailto:davlab.covid19@gmail.com">davlab.covid19@gmail.com</a></li>
                                            </ul>
                                            <div class="branches-map-image">
                                                <img src="{{ asset('davlab/img/branches-map/covid.png') }}" alt="">
                                            </div>
                                            <button class="branches-map-viewer modal-opener"  data-path="modal2"><img src="{{ asset('davlab/img/icons/search-icon.svg') }}" alt=""></button>

                                        </div>
                                    </div>
                                    <div class="swiper-slide modal-opener" data-path="modal3">
                                       <div class="swiper-branches-item">
                                        <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('contact.city_address-3') }}</h3>
                                            <ul class="swiper-branches-item__list">
                                                <li class="swiper-branches-item__list__item">{{ __('contact.local_address-3') }}</li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.mon_fry') }} 09:00-16:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.sat') }} 09:00-12:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+374 91230163"> +374 91/94/95 23 01 63</a></li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.email') }}  <a href="mailto:davidyatsvanadzor@gmail.com">davidyatsvanadzor@gmail.com</a></li>
                                            </ul>
                                            <div class="branches-map-image">
                                                <img src="{{ asset('davlab/img/branches-map/vanadzor.png') }}" alt="">
                                            </div>
                                            <button class="branches-map-viewer"><img src="{{ asset('davlab/img/icons/search-icon.svg') }}" alt=""></button>
                                       </div>
                                    </div>
                                    <div class="swiper-slide modal-opener" data-path="modal4">
                                        <div class="swiper-branches-item">
                                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('contact.city_address-4') }}</h3>
                                            <ul class="swiper-branches-item__list">
                                                <li class="swiper-branches-item__list__item">{{ __('contact.local_address-4') }}</li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.mon_fry') }} 09:00-16:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.sat') }} 09:00-12:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+37499808393">+374 99/98/95 80 83 93</a></li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.email') }}  <a href="mailto:davidyantsgyumri@gmail.com">davidyantsgyumri@gmail.com</a></li>
                                            </ul>
                                            <div class="branches-map-image">
                                                <img src="{{ asset('davlab/img/branches-map/gyumri.png') }}" alt="">
                                            </div>
                                            <button class="branches-map-viewer" data-path="modal4"><img src="{{ asset('davlab/img/icons/search-icon.svg') }}" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide  modal-opener" data-path="modal5">
                                        <div class="swiper-branches-item">
                                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('contact.city_address-5') }}</h3>
                                            <ul class="swiper-branches-item__list">
                                                <li class="swiper-branches-item__list__item">{{ __('contact.local_address-5') }}</li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.mon_fry') }} 09:00-16:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.sat') }} 09:00-12:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+37433307939">+374 33/93/44 30 79 39</a></li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.email') }}  <a href="mailto:davidyantssevan@gmail.com">davidyantssevan@gmail.com</a></li>
                                            </ul>
                                            <div class="branches-map-image">
                                                <img src="{{ asset('davlab/img/branches-map/sevan.png') }}" alt="">
                                            </div>
                                            <button class="branches-map-viewer"><img src="{{ asset('davlab/img/icons/search-icon.svg') }}" alt=""></button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide modal-opener" data-path="modal6">
                                        <div class="swiper-branches-item">
                                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('contact.city_address-6') !!}</h3>
                                            <ul class="swiper-branches-item__list">
                                                <li class="swiper-branches-item__list__item">{{ __('contact.local_address-6') }}</li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.mon_fry') }} 09:00-16:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.sat') }} 09:00-12:00 </li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel: +37497700303"> +374 97  70 03 03</a></li>
                                                <li class="swiper-branches-item__list__item">{{ __('contact.email') }}  <a href="tel:davidyantsartsakh@gmail.com">davidyantsartsakh@gmail.com</a></li>
                                            </ul>
                                            <div class="branches-map-image">
                                                <img src="{{ asset('davlab/img/branches-map/artsakh.png') }}" alt="">
                                            </div>
                                            <button class="branches-map-viewer"><img src="{{ asset('davlab/img/icons/search-icon.svg') }}" alt=""></button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="partners-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title">{{ __('index.workers') }}</h3>
                        </div>
                        <div class="col-12">
                            <div class="swiper-container swiper-partners-container">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/7.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/8.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/1.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/2.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/3.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/4.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/5.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/6.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/9.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-partners-item">
                                        <a href="#" aria-label="Partners Name">
                                            <img src="{{ asset('davlab/img/partners/10.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev-partners"></div>
                            <div class="swiper-button-next-partners"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @include('layouts.davidyants-layouts.footer')
      </div>
@endsection
