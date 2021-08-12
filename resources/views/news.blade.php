@extends('layouts.davidyants-layouts.main')
@section('content')
<div class="page home-page">
    @include('layouts.davidyants-layouts.header')
    <main class="main">
        <div class="bread-crumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">{{ __('index.mainPage') }}</a></li>
                            <li><a href="news.html" >{{ __('index.news') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="news-section first-four-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="news-title section-title">{{ __('index.news') }}</h2>
                    </div>
                    @foreach ($containerOne as $one)
                        <div class="col-6">
                            <div class="news-item">
                                <div class="row">
                                    <div class="col-6">
                                        @if($one->type == 1)
                                        <a  class="image-link-news" href="{{ route('sing', $one->url) }}" rel="nofollow">
                                        <img src="{{ asset('images/'.$one->photo) }}" alt="">
                                        </a>
                                        @else
                                        <a  class="image-link-news" href="{{ route('sing', $one->url) }}" rel="nofollow">
                                        <video id="video-{{$one->id}}" width="360" height="360" controls>
                                            <source src="{{ asset('images/'. $one->photo) }}" type="video/mp4">
                                        </video>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <h3 class="news-item-title">
                                            <a class="image-link-news" href="{{ route('sing', $one->url) }}">{{ $one['title_'.$locale] ?? $one->title_hy}}</a>
                                        </h3>
                                        <div class="news-item-text-content">
                                            <p class="news-item-text">
                                                {!! $one['text_'.$locale] ?? $one->text_hy !!}
                                            </p>

                                        </div>
                                        <div class="news-item-date">
                                            <p>{{ $one->created_at }}</p>
                                        </div>
                                        <a href="{{ route('sing', $one->url) }}" rel='nofollow' class="news-item-link">{{ __('index.more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        @if ($containerTwo && count($containerTwo))
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
                                    <h3>{{ __('index.qr') }} </h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="banner-items">
                                    <div class="banner-items__image">
                                        <img src="{{ asset('davlab/img/icons/all-countries.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="banner-items__name">
                                    <h3>Բ{{ __('index.allCountry') }} </h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="banner-items">
                                    <div class="banner-items__image">
                                        <img src="{{ asset('davlab/img/icons/fast-hours.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="banner-items__name pb-long">
                                    <h3>{{ __('index.hours') }} </h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="banner-items">
                                    <div class="banner-items__image">
                                        <img src="{{ asset('davlab/img/icons/trasnlation.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="banner-items__name pb-long">
                                    <h3>{{ __('index.translation') }} </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="news-section after-banner-section">
            <div class="container">
                <div class="row">
                    @foreach ($containerTwo as $two)
                        <div class="col-6">
                            <div class="news-item">
                                <div class="row">
                                    <div class="col-6">
                                        @if($two->type == 1)
                                        <a  class="image-link-news" href="{{ route('sing', $two->url) }}" rel="nofollow">
                                        <img src="{{ asset('images/'.$two->photo) }}" alt="">
                                        </a>
                                        @else
                                        <a  class="image-link-news" href="{{ route('sing', $two->url) }}" rel="nofollow">
                                        <video id="video-{{$two->id}}" width="360" height="360" controls>
                                            <source src="{{ asset('images/'. $two->photo) }}" type="video/mp4">
                                        </video>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <h3 class="news-item-title">
                                            <a class="image-link-news" href="{{ route('sing', $two->url) }}">{{ $two['title_'.$locale] ?? $two->title_hy }}</a>
                                        </h3>
                                        <div class="news-item-text-content">
                                            <p class="news-item-text">
                                                {!! $two['text_'.$locale] ?? $two->text_hy !!}
                                            </p>

                                        </div>
                                        <div class="news-item-date">
                                                <p>{{ $two->created_at }}</p>
                                            </div>
                                            <a href="{{ route('sing', $two->url) }}" rel='nofollow' class="news-item-link">{{ __('index.more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="col-12">
                        <div class="news-page-pagination">
                            {{ $items->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layouts.davidyants-layouts.footer')
</div>
@endsection
