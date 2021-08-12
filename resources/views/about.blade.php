@extends('layouts.davidyants-layouts.main')
@section('content')
    <div class="page about-page">
        @include('layouts.davidyants-layouts.header')
        <main class="main">
            <div class="bread-crumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="breadcrumbs-list">
                                <li><a href="/">{{ __('index.mainPage') }}</a></li>
                                <li><a href="#">{{ __('index.about') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tabs-parent">
                                <ul class="tabs-changers">
                                    <li class="tab-changer-item">{{ __('index.about') }}</li>
                                    <!-- <li  data-id='accordeon-parent' class="tab-changer-item">Ծառայություններ</li> -->
                                </ul>
                                <div class="tabs-content">
                                    <div class="tab-one-content active" id='aboutInfo'>
                                        {!! $item['text_'.$locale] ?? $item->text_hy ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="images-section gallery">
                <div class="container">
                    @if(isset($item->photos) && count($item->photos))
                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-title">{{ __('index.about_images') }}</h2>
                            </div>
                            @foreach ($item->photos as $photo)
                                <div class="col-3">
                                    <div class="about-image-content">
                                        @if ($photo->type == 1)
                                            <a href="{{ asset('images/'.$photo->photo) }}">
                                                <img src="{{ asset('images/'.$photo->photo) }}" alt="">
                                            </a>
                                        @else
                                            <a class="imVideo" href="{{ asset('images/'.$photo->photo) }}">
                                                <video id="video-{{$photo->id}}" width="360" height="360" controls preload="metadata">
                                                    <source src="{{ asset('images/'. $photo->photo) }}#t=0.001"
                                                            type="video/mp4">
                                                </video>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @endif
                </div>
            </section>
            <section class="images-section license-section">
                <div class="container">
                    @if (isset($item->license) && count($item->license))

                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-title">{{ __('index.about_license') }}</h2>
                            </div>
                            <div class="col-12">
                                <div class="swiper-container swiper-license-image-container">
                                    <div class="swiper-wrapper gallery">
                                        @foreach ($item->license as $license)
                                            <div class="swiper-slide about-image-content">
                                                <a href="{{ asset('images/'.$license->photo) }}">
                                                    <img src="{{ asset('images/'.$license->photo) }}" alt="">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-next-licenses-images"></div>
                                <div class="swiper-button-prev-licenses-images"></div>
                            </div>
                        </div>
                    @endif

                </div>
            </section>
            <section class="about-slider-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-container swiper-license-container">
                                <div class="swiper-wrapper">
                                    @if (count($dataArray[$locale]))
                                        @foreach ($dataArray[$locale] as $item)
                                                <div class="swiper-slide license-slide-item">
                                                    <div class="license-slide-content">
                                                            <h3 class="license-slide-title text-center">{{  $item['key']}}</h3>
                                                                <p class="license-slide-text-content">
                                                                    <span>{{ $item['value']}}</span>
                                                                </p>
                                                        <span role="presentation" class="licene-more-text-opener">Ավելին</span>
                                                    </div>
                                                </div>
                                        @endforeach
                                        @else
                                        @if (count($dataArray['hy']))
                                            @foreach ($dataArray['hy'] as $item)
                                                <div class="swiper-slide license-slide-item">
                                                    <div class="license-slide-content">
                                                        <h3 class="license-slide-title text-center">{{  $item['key']}}</h3>
                                                        <p class="license-slide-text-content">
                                                            <span>{{ $item['value']}}</span>
                                                        </p>
                                                        <span role="presentation" class="licene-more-text-opener">Ավելին</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="swiper-button-next-licenses"></div>
                            <div class="swiper-button-prev-licenses"></div>
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
