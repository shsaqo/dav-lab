@extends('layouts.davidyants-layouts.main')
@section('content')
<div class="page contact-page">
    @include('layouts.davidyants-layouts.header')
    <main class="main">
        <section class="contact-page-section tabs-parent">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="left-fixed-content">
                            <ul class="fixed-content-list">
                                <li data-id="tab-1" class="tab-changer-item contact_page_specific_btns fixed-content-list__item active">
                                    <div class="fixed-content-list__item__inner">
                                        <div class="information-inner">
                                            <h2 class="fixed-item-title">{{ __('contact.city_address-1') }}</h2>
                                            <div class="information-inner-list-and-mobile-info">
                                                <ul class="fixed-item-inner-list">
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.local_address-1') }}</li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.local_address_entrance') }}</li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.tel') }} <a href="tel:+37411200303">+374 11 20 03 03</a></li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.email') }}  <a href="mailto:davidyats.labs@gmail.com">davidyats.labs@gmail.com</a></li>
                                                </ul>
                                                <div class="mobile-contact-information">
                                                    <h3 class="mobile-working-days-title">{{ __('contact.work_day_hours') }}</h3>
                                                    <ul class="mobile-working-days-list">
                                                        <li class="mobile-working-days__items">Երկ-Ուրբ 09:00-16:00</li>
                                                        <li class="mobile-working-days__items">Շբթ 09:00-12:00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-id="tab-2" class="tab-changer-item contact_page_specific_btns fixed-content-list__item">
                                    <div class="fixed-content-list__item__inner">
                                        <div class="information-inner">
                                            <h2 class="fixed-item-title">{{ __('contact.city_address_covid') }}</h2>
                                            <div class="information-inner-list-and-mobile-info">
                                                <ul class="fixed-item-inner-list">
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.local_address-2') }}</li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.tel') }} <a href="tel:+37411200303"> +374 11 20 03 03</a></li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.email') }}  <a href="mailto:davlab.covid19@gmail.com">davlab.covid19@gmail.com</a></li>
                                                </ul>
                                                <div class="mobile-contact-information">
                                                    <h3 class="mobile-working-days-title">{{ __('contact.work_day_hours') }}</h3>
                                                    <ul class="mobile-working-days-list">
                                                        <li class="mobile-working-days__items">Երկ-Ուրբ 09:00-16:00</li>
                                                        <li class="mobile-working-days__items">Շբթ 09:00-12:00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li data-id="tab-3" class="tab-changer-item contact_page_specific_btns fixed-content-list__item">
                                    <div class="fixed-content-list__item__inner">
                                        <div class="information-inner">
                                            <h2 class="fixed-item-title">{{ __('contact.city_address-3') }}</h2>
                                            <div class="information-inner-list-and-mobile-info">
                                                <ul class="fixed-item-inner-list">
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.local_address-3') }}</li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.tel') }}  <a href="tel:+374 91230163">+374 91/94/95 23 01 63</a></li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.email') }}  <a href="mailto:davidyatsvanadzor@gmail.com">davidyatsvanadzor@gmail.com</a></li>
                                                </ul>
                                                <div class="mobile-contact-information">
                                                    <h3 class="mobile-working-days-title">{{ __('contact.work_day_hours') }}</h3>
                                                    <ul class="mobile-working-days-list">
                                                        <li class="mobile-working-days__items">Երկ-Ուրբ 09:00-16:00</li>
                                                        <li class="mobile-working-days__items">Շբթ 09:00-12:00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li data-id="tab-4" class="tab-changer-item contact_page_specific_btns fixed-content-list__item">
                                    <div class="fixed-content-list__item__inner">
                                        <div class="information-inner">
                                            <h2 class="fixed-item-title">{{ __('contact.city_address-4') }}</h2>
                                            <div class="information-inner-list-and-mobile-info">
                                                <ul class="fixed-item-inner-list">
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.local_address-4') }}</li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.tel') }}   <a href="tel:+37499808393">+374 99/98/95 80 83 93</a></li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.email') }}  <a href="mailto:davidyantsgyumri@gmail.com">davidyantsgyumri@gmail.com</a></li>
                                                </ul>
                                                <div class="mobile-contact-information">
                                                    <h3 class="mobile-working-days-title">{{ __('contact.work_day_hours') }}</h3>
                                                    <ul class="mobile-working-days-list">
                                                        <li class="mobile-working-days__items">Երկ-Ուրբ 09:00-16:00</li>
                                                        <li class="mobile-working-days__items">Շբթ 09:00-12:00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-id="tab-5" class="tab-changer-item contact_page_specific_btns fixed-content-list__item">
                                    <div class="fixed-content-list__item__inner">
                                        <div class="information-inner">
                                            <h2 class="fixed-item-title">{{ __('contact.city_address-5') }}</h2>
                                            <div class="information-inner-list-and-mobile-info">
                                                <ul class="fixed-item-inner-list">
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.local_address-5') }}</li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.tel') }}  <a href="tel:+37433307939">+374 33/93/44 30 79 39</a></li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.email') }}  <a href="mailto:davidyantssevan@gmail.com">davidyantssevan@gmail.com</a></li>
                                                </ul>
                                                <div class="mobile-contact-information">
                                                    <h3 class="mobile-working-days-title">{{ __('contact.work_day_hours') }}</h3>
                                                    <ul class="mobile-working-days-list">
                                                        <li class="mobile-working-days__items">Երկ-Ուրբ 09:00-16:00</li>
                                                        <li class="mobile-working-days__items">Շբթ 09:00-12:00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-id="tab-6" class="tab-changer-item contact_page_specific_btns fixed-content-list__item">
                                    <div class="fixed-content-list__item__inner">
                                        <div class="information-inner">
                                            <h2 class="fixed-item-title">{!! __('contact.city_address-6') !!}</h2>
                                            <div class="information-inner-list-and-mobile-info">
                                                <ul class="fixed-item-inner-list">
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.local_address-6') }}</li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.tel') }} <a href="tel: +37497700303"> +374 97  70 03 03</a></li>
                                                    <li class="fixed-item-inner-list__item">{{ __('contact.email') }}  <a href="tel:davidyantsartsakh@gmail.com">davidyantsartsakh@gmail.com</a></li>
                                                </ul>
                                                <div class="mobile-contact-information">
                                                    <h3 class="mobile-working-days-title">{{ __('contact.work_day_hours') }}</h3>
                                                    <ul class="mobile-working-days-list">
                                                        <li class="mobile-working-days__items">Երկ-Ուրբ 09:00-16:00</li>
                                                        <li class="mobile-working-days__items">Շբթ 09:00-12:00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div id="tab-1" class="tab-one-content right-side-content active">
                            <h1 class="right-side-title">{{ __('contact.city_address-1') }}</h1>
                            <div class="right-side-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.7169200890544!2d44.48659701570205!3d40.215359475785164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd57fd9e977b%3A0x71f6635e24772f89!2sDavidyants%20Laboratories!5e0!3m2!1sen!2s!4v1615870692295!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="right-side-btn">
                                <a href="/price" class="hero-btn">{{ __('index.analysisPrice') }} <img src="{{asset('davlab/img/icons/white-arrow.svg')}}" alt=""></a>
                            </div>
                            <div class="small-desktop-side-by-side">
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.address') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.local_address-1') }}</li>
                                        <li class="right-side-lists__item">{{ __('contact.local_address_entrance') }}</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.work_day_hours') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.mon_fry') }} 09:00-16:00</li>
                                        <li class="right-side-lists__item">{{ __('contact.sat') }} 09:00-12:00</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.tel') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item"><a href="tel:+37411200303">+374 11200303</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-one-content right-side-content">
                            <h1 class="right-side-title">{{ __('contact.city_address_covid') }}</h1>
                            <div class="right-side-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.6804827802027!2d44.488449829248495!3d40.215248022811934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDEyJzU0LjkiTiA0NMKwMjknMjAuNCJF!5e0!3m2!1sen!2s!4v1620053094828!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="right-side-btn">
                                <a href="/price" class="hero-btn">{{ __('index.analysisPrice') }} <img src="{{asset('davlab/img/icons/white-arrow.svg')}}" alt=""></a>
                            </div>
                            <div class="small-desktop-side-by-side">
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.address') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.local_address-2') }}</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.work_day_hours') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.mon_fry') }} 09:00-16:00</li>
                                        <li class="right-side-lists__item">{{ __('contact.sat') }} 09:00-12:00</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.tel') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item"><a href="tel:+37411200303">+374 11200303</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-one-content right-side-content">
                            <h1 class="right-side-title">{{ __('contact.city_address-3') }}</h1>
                            <div class="right-side-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d755.0175278384595!2d44.48916124707876!3d40.80445308601249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ4JzE2LjMiTiA0NMKwMjknMjIuNyJF!5e0!3m2!1sen!2s!4v1619537882217!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="right-side-btn">
                                <a href="/price" class="hero-btn">{{ __('index.analysisPrice') }} <img src="{{asset('davlab/img/icons/white-arrow.svg')}}" alt=""></a>
                            </div>
                            <div class="small-desktop-side-by-side">
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.address') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.local_address-3') }}</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.work_day_hours') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.mon_fry') }} 09:00-16:00</li>
                                        <li class="right-side-lists__item">{{ __('contact.sat') }} 09:00-12:00</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.tel') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item"><a href="tel:+37491230163">+374 91230163</a></li>
                                        <li class="right-side-lists__item"><a href="tel:+37494230163">+374 94230163</a></li>
                                        <li class="right-side-lists__item"><a href="tel:+37495230163">+374 95230163</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-one-content right-side-content">
                            <h1 class="right-side-title">{{ __('contact.city_address-4') }}</h1>
                            <div class="right-side-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1510.004063516578!2d43.8473155!3d40.8058152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041fbd95e9072db%3A0x5ce96a04a8f02f6a!2sRepin%20Street%2C%20Gyumri%2C%20Armenia!5e0!3m2!1sen!2s!4v1619525302604!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="right-side-btn">
                                <a href="/price" class="hero-btn">{{ __('index.analysisPrice') }} <img src="{{asset('davlab/img/icons/white-arrow.svg')}}" alt=""></a>
                            </div>
                            <div class="small-desktop-side-by-side">
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.address') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.local_address-4') }}</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.work_day_hours') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.mon_fry') }} 09:00-16:00</li>
                                        <li class="right-side-lists__item">{{ __('contact.sat') }} 09:00-12:00</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.tel') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item"><a href="tel:++37499808393">+374 99808393</a></li>
                                        <li class="right-side-lists__item"><a href="tel:++37498808393">+374 98808393 </a></li>
                                        <li class="right-side-lists__item"><a href="tel:++37495808393">+374 95808393</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-one-content right-side-content">
                            <h1 class="right-side-title">{{ __('contact.city_address-5') }}</h1>
                            <div class="right-side-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3031.611164087175!2d44.95460695143823!3d40.55017897924842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDMzJzAwLjYiTiA0NMKwNTcnMjQuNSJF!5e0!3m2!1sru!2s!4v1619534918724!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="right-side-btn">
                                <a href="/price" class="hero-btn">{{ __('index.analysisPrice') }} <img src="{{asset('davlab/img/icons/white-arrow.svg')}}" alt=""></a>
                            </div>
                            <div class="small-desktop-side-by-side">
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.address') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.local_address-5') }}</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.work_day_hours') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.mon_fry') }} 09:00-16:00</li>
                                        <li class="right-side-lists__item">{{ __('contact.sat') }} 09:00-12:00</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.tel') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item"><a href="tel:++37433307939">+374 33307939</a></li>
                                        <li class="right-side-lists__item"><a href="tel:++37493307939">+374 93307939 </a></li>
                                        <li class="right-side-lists__item"><a href="tel:++37444307939">+374 44307939</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-one-content right-side-content">
                            <h1 class="right-side-title">{!! __('contact.city_address-6') !!}</h1>
                            <div class="right-side-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d766.1894119933112!2d46.74950959922243!3d39.81242772427191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDQ4JzQ0LjQiTiA0NsKwNDQnNTkuMSJF!5e0!3m2!1sen!2s!4v1619537596152!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="right-side-btn">
                                <a href="/price" class="hero-btn">{{ __('index.analysisPrice') }} <img src="{{asset('davlab/img/icons/white-arrow.svg')}}" alt=""></a>
                            </div>
                            <div class="small-desktop-side-by-side">
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.address') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.local_address-6') }}</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.work_day_hours') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item">{{ __('contact.mon_fry') }} 09:00-16:00</li>
                                        <li class="right-side-lists__item">{{ __('contact.sat') }} 09:00-12:00</li>
                                    </ul>
                                </div>
                                <div class="right-side-list-content">
                                    <h3 class="right-side-lists-titles">{{ __('contact.tel') }}</h3>
                                    <ul class="right-side-lists">
                                        <li class="right-side-lists__item"><a href="tel:++7497700303">+374 97700303</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right-side-content mobile-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.7169200890544!2d44.48659701570205!3d40.215359475785164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd57fd9e977b%3A0x71f6635e24772f89!2sDavidyants%20Laboratories!5e0!3m2!1sen!2s!4v1615870692295!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
