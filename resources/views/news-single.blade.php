@extends('layouts.davidyants-layouts.main')
@section('content')
<div class="page news-single-page">
    @include('layouts.davidyants-layouts.header')
    <main class="main">
        <div class="bread-crumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">{{ __('index.mainPage') }}</a></li>
                            <li><a href="{{ route('news.page') }}" >{{ __('index.news') }}</a></li>
                            <li><a href="#">{{ $item['title_'.$locale] ?? $item->title_hy}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <section class="singe-news-section">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="news-single-title-content">
                                <h1 class="news-single-title">{{ $item['title_'.$locale] ?? $item->title_hy}}</h1>
                                <p class="news-single-date">{{ $item->created_at }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <a id="share-facebook" href="http://www.facebook.com/sharer/sharer.php?u={{request()->url()}}" data-da=".for-share-mobile-container, 767.98, first" class="facebook-share"><img src="{{asset('davlab/img/icons/facebook-share.svg')}}" alt=""></a>
                        </div>
                        <div class="col-6">
                            <div class="news-single-text-container">
                                {!! $item['text_'.$locale] ?? $item->text_hy !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="news-single-image">
                                @if($item->type == 1)
                                <img src="{{ asset('images/'.$item->photo) }}" alt="">
                                @else
                                <video id="video-{{$item->id}}" width="360" height="360" controls>
                                    <source src="{{ asset('images/'. $item->photo) }}" type="video/mp4">
                                </video>
                                @endif
                            </div>
                        </div>

                    </div>
                    @if($item->newsPhotos && count($item->newsPhotos))
                    <div class="row">
                        <div class="col-12">
                            <div class="images-from-post">
                                <div class="more-images-title">
                                    <h2>{{ __('index.photosFromArticle') }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="swiper-container swiper-such-images-container gallery">
                                <div class="swiper-wrapper">
                                    @foreach ($item->newsPhotos as $newsPhotos)
                                        @if ($newsPhotos->is_type == 1)
                                            <div class="swiper-slide swiper-single-such-item">
                                                <a href="{{ asset('images/'.$newsPhotos->news_other_photo) }}" class='image' aria-label="Partners Name">
                                                    <img src="{{ asset('images/'.$newsPhotos->news_other_photo) }}" alt="">
                                                </a>
                                            </div>
                                        @else
                                            <div class="swiper-slide swiper-single-such-item video-item">
                                                <a class="imVideo" href="{{ asset('images/'.$newsPhotos->news_other_photo) }}" aria-label="Partners Name">
                                                    <video width="320" height="240" controls>
                                                        <source src="{{ asset('images/'. $newsPhotos->news_other_photo) }}#t=0.001" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </a>
                                            </div>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-prev-partners"></div>
                            <div class="swiper-button-next-partners"></div>
                        </div>
                    </div>
                    @endif
                    <div class="for-share-mobile-container">
                    </div>
                </div>
            </section>

        <section class="section-prev-next-news news-section">
            <div class="container">
                <div class="row">
                    @foreach ($lastNews as $last)
                        <div class="col-6">
                            <div class="news-item">
                                <div class="row">
                                    <div class="col-6">
                                        <a  class="image-link-news" href="{{ route('sing', $last->url) }}" rel="nofollow">
                                            @if($last->type == 1)
                                            <img src="{{ asset('images/'.$last->photo) }}" alt="">
                                            @else
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('images/'. $last->photo) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            @endif
                                        </a>

                                    </div>
                                    <div class="col-6">
                                        <h3 class="news-item-title">
                                            <a href="{{ route('sing', $last->url) }}">{{ $last['title_'.$locale] ?? $last->title_hy }}</a>
                                        </h3>
                                        <div class="news-item-text-content">
                                            <p class="news-item-text">
                                                {!! $last['text_'.$locale] ?? $last->text_hy !!}
                                            </p>

                                        </div>
                                        <div class="news-item-date">
                                                <p>{{ $last->created_at }}</p>
                                            </div>
                                            <a href="{{ route('sing', $last->url) }}" rel='nofollow' class="news-item-link">Կարդալ ավելին</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    @include('layouts.davidyants-layouts.footer')
</div>
@endsection
