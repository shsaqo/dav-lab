@extends('layouts.davidyants-layouts.main')
@section('content')
<div class="page covid-page">
    @include('layouts.davidyants-layouts.header')
    <main class="main">
        <div class="bread-crumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">{{ __('index.mainPage') }}</a></li>
                            <li><a href="#">Covid-19</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="covid-hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="before-title-bacteria"></div>
                        <div class="hero-title-and-descr">
                            <h1 class="hero-title"><span>COVID-19</span> թեստավորում ՊՇՌ մեթոդով</h1>
                            <p class="hero-descr">Անալիզի հաշվառում և նմուշառում ընդամենը 2-3 րոպեում</p>
                        </div>
                        <div class="after-descr-bacteria"></div>
                    </div>
                    <div class="col-5">
                        <div class="covid-hero-image-parent">
                            <img src="{{asset('davlab/img/covid-hero.svg')}}" alt="">
                        </div>
                        <div class="group-1"></div>
                        <div class="man-group"></div>
                        <div class="man-shape"></div>
                        <div class="bottles-group"></div>
                        <div class="bottles-shape"></div>
                        <div class="small-items-group"></div>
                        <div class="light-bacteria"></div>
                        <div class="light-bacteria-right"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner-section covid-banner-section">
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
        <section class="covid-price-item">
            <div class="container">
                <div class="row">
                    <div class="price-item">
                        <div class="col-12">
                            <div class="price-content">
                                <h3 class="price-name">Թեստավորման արժեքը - COVID-19 թեստավորում ՊՇՌ մեթոդով</h3>
                                <p class="current-price">15000 դր․</p>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="col-12">
                            <div class="price-content">
                                <h3 class="price-name">Հակամարմինների (IgM և IgG) հայտնաբերման թեստավորում</h3>
                                <p class="current-price">10000 դր․</p>
                            </div>
                        </div>
                    </div>
                    <div class="all-price-descr">
                        <p><img src="{{asset('davlab/img/icons/info-icon.svg')}}" alt=""></p>
                        <p>Նշված անալիզները "տնային կանչ" ծառայությամբ հանձնելու դեպքում անալիզի արժեքին ավելանում է<span> +6000 դր․</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="branches-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="section-title">
                        {{ __('covid.where_take_tests') }}
                        </h3>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('covid.yerevan') }}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_yerevan') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_yerevan') }} 09։00-20։00  </li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_sunday') }} 09։00- 16։00 </li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.tel') }} <a href="tel:+37411200303">+374 11 20 03 03</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('covid.nairi') }}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_nairi') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։30</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.tel') }} <a href="tel:++37410537500"> +374 10 53 75 00</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('covid.n2mc') }}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_m2mc') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-18։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-18։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.tel') }} <a href="tel:+37411200333">+374 11 20 03 33</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{{ __('covid.zvartnoc') }}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_zvartnoc') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_zvartnoc') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.tel') }} <a href="tel:+37496204303">+374 96 20 43 03</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.charentsavan') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_charentsavan') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-12։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel: +37444307939"> +374 93/44  30 79 39</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.vanadzor') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_vanadzor') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-12։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel: +374091230163"> +374 091/094/095 23 01 63</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.sevan') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_sevan') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-12։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel: +374033307939"> +374 033/093/044  30 79 39</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.gavar') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_gavar') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-12։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+374044307939"> +374 033/093/044  30 79 39</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.martuni') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_martuni') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-12։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+374033307939"> +374 033/093/044  30 79 39</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.gyumri') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_gyumri') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-12։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+374099808393"> +374 099/098/095  80 83 93</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.ijevan') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.local_address_ijevan') }}</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day') }} 09։00-16։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_saturday') }} 09։00-12։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+374094334496"> +374094334496</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="swiper-branches-item">
                            <h3 class="swiper-branches-item__title"><img src="{{ asset('davlab/img/icons/pin.svg') }}" alt="">{!! __('covid.bavra') !!}</h3>
                            <ul class="swiper-branches-item__list">
                                <li class="swiper-branches-item__list__item">{{ __('covid.work-day_bavra') }} 10։00-18։00</li>
                                <li class="swiper-branches-item__list__item">{{ __('contact.tel') }} <a href="tel:+374099808393"> +374 099/098/095  80 83 93</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="covid-contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-information">
                            <div class="contact-numbers">
                                <a href="tel:+37411200303"><img src="{{asset('davlab/img/icons/covid-page/whatsapp-icon.svg')}}" alt=""> 374 11 200 303</a>
                                <a href="tel:+37499369592">374 99 369 592</a>
                                <a href="tel:+37411200333">374 11 200 333</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.davidyants-layouts.footer')
</div>
@endsection
