@extends('layouts.davidyants-layouts.main')
@section('content')
    <div class="page price-page">
        @include('layouts.davidyants-layouts.header')
        <main class="main">
            <div class="bread-crumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <ul class="breadcrumbs-list">
                                <li><a href="/">{{ __('index.mainPage') }}</a></li>
                                <li><a href="#">{{ __('index.analysisPrice') }}</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="paper-printer">
                                <a href="{{ route('paper-page') }}" class="to-paper-page"><img
                                        src="{{ asset('davlab/img/icons/printer-green.svg') }}" alt="">{{ __('analyses.analysisLongBtn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="analyze-and-price-section tabs-parent">
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <div class="mobile-title-and-price-item">
                                <h1 class="price-analyze-title">{{ __('index.analysisPrice') }}</h1>
                                <div id="analyses" class="all-price-item" style="display: none">
                                    <div class="all-price-content">
                                        <p class="all-analyzes" data-open-analyzer-opener>
                                        {{ __('analyses.researches') }} <img src="{{asset('davlab/img/icons/eye-icon.svg')}}" alt=""> <span id="analyses_count">3</span>
                                        </p>
                                        <div class="choosed-analyzes">
                                            <ul class="chossed-items-list" id="chooses-list">

                                                <li class="all_price_dropdown">
                                                    <p>{{ __('analyses.totalPrice') }}<span> <span id="total_price">դր․</span></span></p>
                                                    <div class="form-actions">
                                                        <a href="#" class="dwn-price-list" aria-label="download file"><img
                                                                src="{{ asset('davlab/img/icons/download-icon.svg') }}"
                                                                alt=""></a>
                                                        <a href="#" class="print_btn"><img
                                                                src="{{ asset('davlab/img/icons/print-icon.svg') }}"
                                                                alt="">{{ __('analyses.print') }}</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="all-price">{{ __('analyses.totalPrice') }} <span id="analyses_total_price">13․000 <span>դր</span></span>
                                        </p>
                                    </div>
                                    <div class="all-analyzes-clear-btn">
                                        <button class="clear-btn" id="clear-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24.208" height="22.419"
                                                 viewBox="0 0 24.208 22.419">
                                                <g transform="translate(0 0)" opacity="0.5">
                                                    <path
                                                        d="M11.209,17.983A11.173,11.173,0,0,1,21.349,24.4l1.264-2.624,1.595.768-2.625,5.448-5.448-2.625.768-1.595,2.838,1.367a9.445,9.445,0,1,0-.813,9.486l1.447,1.02a11.21,11.21,0,1,1-9.166-17.665Z"
                                                        transform="translate(0 -17.983)"/>
                                                </g>
                                            </svg>
                                            {{ __('analyses.clear') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-form">
                    <form>
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('about.page') }}" method="get">
                                    <div class="col-4">
                                        <input type="text" name="search" placeholder="{{ __('analyses.search') }}" value="{{ request()->get('search') }}">
                                    </div>
                                    <div class="col-7">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.179" height="15.188"
                                                 viewBox="0 0 15.179 15.188">
                                                <path
                                                    d="M14.13,12.794h-.7l-.249-.24a5.8,5.8,0,1,0-.623.623l.24.249v.7l3.784,3.784A.938.938,0,0,0,17.9,16.587Zm-5.342,0a4.007,4.007,0,1,1,4.007-4.007A4,4,0,0,1,8.787,12.794Z"
                                                    transform="translate(-2.999 -2.999)" fill="#212121"/>
                                            </svg>
                                            <span>{{ __('analyses.search') }}</span></button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="container">
                    <div class="row mainForm  in-mobile-hide-row">
                        <div class="col-4">
                            <div class="price-tabs-controllers tabs-parent">
                                @forelse ($categories as $item)
                                    @if ($item->child_count && $item->parent_id == null)
                                        <div class="sidebar-tab">
                                            <button @if($item->type == 1) style="border-left: 6px solid #08A66D" @elseif($item->type == 2) style="border-left: 6px solid #DAE1E2" @endif
                                                class="tab-chooser tab-changer-item tab-chooser-has-sub-content">{{ $item['name_'.$locale] ?? $item['name_hy'] }}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.439" height="11.593"
                                                     viewBox="0 0 7.439 11.593">
                                                    <path d="M1809.953,4362.342l-6.337,5.638,6.337,5.195"
                                                          transform="translate(-1802.846 -4361.968)" fill="none"
                                                          stroke="#000" stroke-width="2.5"/>
                                                </svg>
                                            </button>
                                            <div class="sidebar-tab-content">
                                                @foreach ($item->child as $child)
                                                    <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" @if($child->type == 1) style="border-left: 6px solid #08A66D" @elseif($child->type == 2) style="border-left: 6px solid #DAE1E2" @endif
                                                        class="sidebar-sub-title tab-chooser tab-changer-item"
                                                        data-id='price-tab-{{ $child->id }}'>{{ $child['name_'.$locale] ?? $child['name_hy'] }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                    @elseif($item->child_count == 0 && $item->parent_id == null)
                                        <div class="sidebar-tab">
                                            <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" @if($item->type == 1) style="border-left: 6px solid #08A66D" @elseif($item->type == 2) style="border-left: 6px solid #DAE1E2" @endif
                                                class="tab-chooser tab-changer-item"
                                                data-id='price-tab-{{ $item->id }}'>{{ $item['name_'.$locale] ?? $item['name_hy'] }}</button>
                                        </div>
                                    @endif
                                    @empty
                                    <p style="background-color: #eeeeee;">Արդյունքներ չեն գտնվել</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="price-tabs-content">
                                @foreach ($categories as $item)
                                        <div id="tab-{{ $item->id }}" class="tab-one-content">
                                            @foreach ($item->element as $element)
                                                @if($item && $loop->iteration == 1)
                                                   <div class="checbox-and-price ">
                                                       <div class="checbox-and-text">
                                                           <label class="container-checkbox first-checkbox">
                                                               <input id="analyses-first-checkbox" class="all-select" data-id="{{$item->id}}" type="checkbox">
                                                               <span class="checkmark"></span>
                                                           </label>
                                                           <h3 class="analyze-one-item analyze-first-item">{{ __('analyses.allClinicAnalyzes') }}</h3>
                                                       </div>
                                                       <p>{{ __('analyses.price') }}</p>
                                                   </div>
                                               @endif
                                                <div class="checbox-and-price" data=price-tab-{{ $element->analysis_category_id }}>
                                                    <div class="checbox-and-text">
                                                        <label class="container-checkbox first-checkbox">
                                                            <input class="item-check check-id-{{$element->id}}" id={{$element->id}} type="checkbox" data=price-tab-{{ $element->analysis_category_id }}>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <h3 class="analyze-one-item analyze-tooltip-item"
                                                            data-tooltip="{{ $element['prompt_text_'.$locale] ?? $element->prompt_text_hy}}">
                                                            {{ $element['name_'.$locale] ?? $element['name_hy'] }} @if($element['prompt_text_'.$locale] != $prompText['text_'.$locale]) <img class="on-choosed-hide" src="{{ asset('davlab/img/icons/info-icon.svg') }}" alt=""> @endif
                                                        </h3>
                                                    </div>
                                                    <p>{{ $element->price }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mainForm in-desktop-hide-row tabs-parent">
                      <div class="col-12">
                        <div class="price-tabs-controllers">
                        @forelse ($categories as $item)
                            @if ($item->parent_id == null)
                                <div class="sidebar-tab">
                                    <button @if($item->type == 1) style="border-left: 6px solid #08A66D" @elseif($item->type == 2) style="border-left: 6px solid #DAE1E2" @endif
                                    class="tab-chooser tab-changer-item tab-chooser-has-sub-content" data-id='price-tab-{{ $item->id }}'>{{ $item['name_'.$locale] ?? $item['name_hy'] }}<svg xmlns="http://www.w3.org/2000/svg" width="7.439" height="11.593" viewBox="0 0 7.439 11.593"><path d="M1809.953,4362.342l-6.337,5.638,6.337,5.195" transform="translate(-1802.846 -4361.968)" fill="none" stroke="#000" stroke-width="2.5"/></svg></button>
                                    <div class="sidebar-tab-content">
                                    <div class="price-tabs-content">

                                        <form action="#">
                                        @if($item->child_count != 0)
                                            @foreach($item->child as $child)
                                            <button @if($child->type == 1) style="border-left: 6px solid #08A66D" @elseif($child->type == 2) style="border-left: 6px solid #DAE1E2" @endif type="button" class="mobile-sub-shower tab-changer-item" data-id='mobile-price-tab-{{ $child->id }}'>{{ $child['name_'.$locale] ?? $child['name_hy'] }}</button>

                                            <div class="mobile-sub-items"  id='mobile-price-tab-{{ $child->id }}'>
                                            @foreach($child->element as $element)
                                            <div class="checbox-and-price">
                                                <div class="checbox-and-text">
                                                <label class="container-checkbox">
                                                    <input class="item-check check-id-{{$element->id}}" id={{$element->id}} type="checkbox" >
                                                    <span class="checkmark"></span>
                                                    </label>
                                                <h3 class="analyze-one-item analyze-tooltip-item" data-tooltip="{{ $element['prompt_text_'.$locale] ?? $element->prompt_text_hy}}">
                                                {{ $element['name_'.$locale] ?? $element['name_hy'] }} @if($element['prompt_text_'.$locale] != $prompText['text_'.$locale]) <img class="on-choosed-hide" src="{{ asset('davlab/img/icons/info-icon.svg') }}" alt=""> @endif
                                                    </h3>
                                                </div>
                                                <p>{{ $element->price }}</p>
                                            </div>
                                            @endforeach
                                            </div>
                                            @endforeach
                                        @else


                                            @foreach($item->element as $element)
                                                <div class="mobile-sub-items" data={{$element->analysis_category_id}}>
                                                    <div class="checbox-and-price">
                                                        <div class="checbox-and-text">
                                                        <label class="container-checkbox">
                                                            <input type="checkbox" class="item-check check-id-{{$element->id}}" id={{$element->id}} type="checkbox" data=price-tab-{{ $element->analysis_category_id }}>
                                                            <span class="checkmark"></span>
                                                            </label>
                                                        <h3 class="analyze-one-item analyze-tooltip-item" data-tooltip="{{ $element['prompt_text_'.$locale] ?? $element->prompt_text_hy}}">
                                                        {{ $element['name_'.$locale] ?? $element['name_hy'] }} @if($element['prompt_text_'.$locale] != $prompText['text_'.$locale]) <img class="on-choosed-hide" src="{{ asset('davlab/img/icons/info-icon.svg') }}" alt=""> @endif
                                                            </h3>
                                                        </div>
                                                        <p>{{ $element->price }}</p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        @endif

                                    </form>
                                    </div>
                                    </div>
                                </div>
                            @endif
                            @empty
                                <p style="background-color: #eeeeee;">Արդյունքներ չեն գտնվել</p>
                        @endforelse

                        </div>
                      </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-11 in-mobile-12">
                            <div class="price-big-information-content">
                                <div class="big-info-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47.931" height="47.931"
                                         viewBox="0 0 47.931 47.931">
                                        <path
                                            d="M23.964,0A23.965,23.965,0,1,0,47.931,23.964,23.966,23.966,0,0,0,23.964,0Zm4.989,37.141q-1.85.73-2.952,1.112a7.787,7.787,0,0,1-2.56.383,5.1,5.1,0,0,1-3.483-1.094,3.529,3.529,0,0,1-1.24-2.773,10.074,10.074,0,0,1,.091-1.337c.063-.454.162-.966.3-1.54l1.544-5.453c.136-.523.254-1.02.347-1.483a6.576,6.576,0,0,0,.138-1.284,1.978,1.978,0,0,0-.43-1.455,2.443,2.443,0,0,0-1.649-.408,4.329,4.329,0,0,0-1.227.183c-.416.128-.777.243-1.073.357l.408-1.68q1.516-.618,2.9-1.057a8.571,8.571,0,0,1,2.617-.442,5.008,5.008,0,0,1,3.433,1.075,3.573,3.573,0,0,1,1.205,2.792q0,.356-.083,1.252a8.376,8.376,0,0,1-.308,1.645l-1.536,5.437c-.126.436-.237.935-.339,1.493a7.9,7.9,0,0,0-.148,1.27,1.824,1.824,0,0,0,.485,1.477,2.714,2.714,0,0,0,1.678.394,4.867,4.867,0,0,0,1.27-.2,7.221,7.221,0,0,0,1.027-.345Zm-.272-22.069a3.665,3.665,0,0,1-2.587,1,3.7,3.7,0,0,1-2.6-1,3.187,3.187,0,0,1-1.081-2.42A3.219,3.219,0,0,1,23.5,10.225a3.677,3.677,0,0,1,2.6-1.008,3.636,3.636,0,0,1,2.587,1.008,3.269,3.269,0,0,1,0,4.847Z"
                                            fill="#D6D6D6"/>
                                    </svg>
                                </div>
                                <p class="big-info-text">
                                   {{ $prompText['text_'.$locale] ?? $prompText->hy}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @include('layouts.davidyants-layouts.footer')
    </div>
    <div class="page in-print-view" id="download-content">
        <div class="prefix_printing_row">
            <div class="prefix_container_print">
                <div class="prefix_container_logo">
                    <img src="{{asset('davlab/img/logo.svg')}}" alt="">
                </div>
                <div class="prefix_print_information_item">
                    <p>ք․ Երևան</p>
                    <p>Դավիթաշեն 3-րդ թաղ․, 10/3</p>
                    <p>մուտքը Սասնա Ծռեր փողոցից</p>
                    <p>Հեռ․` +374 11 20 03 03</p>
                </div>
                <div class="prefix_print_information_item">
                    <p>ք․ Երևան, COVID-19 կենտրոն</p>
                    <p>Դավթաշեն, Սասնա Ծռեր 7/1</p>
                    <p>Հեռ․` +374 11 20 03 03</p>
                </div>
                <div class="prefix_print_information_item">
                    <p>ք․ Վանաձոր</p>
                    <p>Մյասնիկյան 23-27/1</p>
                    <p>Հեռ․` +374 91/94/95 23 01 63</p>
                </div>
                <div class="prefix_print_information_item">
                    <p>ք․ Գյումրի</p>
                    <p>Վ․ Սարգսյան 2 շ․, 3/1</p>
                    <p>Հեռ․` +374 99 / 98 / 95 80 83 93</p>
                </div>
                <div class="prefix_print_information_item">
                    <p>ք․ Սևան</p>
                    <p>Սայաթ Նովա 4/8-10</p>
                    <p>Հեռ․`+374 33 / 93 / 44 30 79 39</p>
                </div>
                <div class="prefix_print_information_item">
                    <p>Արցախի Հանրապետություն,</p>
                    <p>ք․ Ստեփանակերտ</p>
                    <p>Վ․ Սարգսյան 3/43</p>
                    <p>Հեռ․`+374 97 70 03 03</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                   <div class="col-12">
                       <h3 class="prefix_print_title">Անալիզներ և գնացուցակ</h3>
                    </div>
                </div>
                <div class="row jcc" id="there-add-all">
                </div>
                <div class="row">
                    <div class="col-12">
                    <div class="all-price-content">
                        <p class="all-price-name">Ընդ․ գումարը</p>
                        <div id="dwn-total-price" class="all-price-sum">9000<span>դր․</span></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
