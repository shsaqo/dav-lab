@extends('layouts.adminLayouts.main-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="m-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <a href="{{ url()->previous() }}  " class="go-back-btn d-inline-flex align-items-center"><img
                        class="mr-2" src="{{asset('icons/arrow-green.svg')}}" />Հետ</a><br>
            </div>
            <form id="about-us-form" class="form" action="{{ route('about.update', $about) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="main-card mb-3 card">
                    <div class="card-header">Մեր մասին
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm nav btn-group">
                                <a data-toggle="tab" href="#tab-eg1-0"
                                    class="btn-shadow btn btn-primary active language-changers">Հայերեն</a>
                                <a data-toggle="tab" href="#tab-eg1-1"
                                    class="btn-shadow btn btn-primary language-changers">Ռուսերեն</a>
                                <a data-toggle="tab" href="#tab-eg1-2"
                                    class="btn-shadow btn btn-primary language-changers">Անգլերեն</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                <div class="card-body">
                                    <div class="position-relative form-group">
                                        <label for="text_hy" class="">Տեքստ</label>
                                        <textarea required name="text_hy" id="editor" cols="30" rows="10"
                                            class="form-control">
                                   {{ $about->text_hy }}
                                </textarea>
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="upload" class="">Նկար/վիդեո</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input accept=".jpeg,.jpg, .png, .gif, .mp4, .mov, .ogg"
                                                    name="uploads[]" multiple id="upload" type="file"
                                                    class="custom-file-input-slider-image">
                                                <label class="custom-file-label" for="upload"></label>
                                            </div>
                                        </div>
                                        {{-- <input name="deleteAboutPhoto[]" id="upload" type="hidden" value="11">--}}
                                        @if ($about->photos && count($about->photos))
                                        <div class="row mt-3">
                                            @foreach ($about->photos as $photo)
                                            @if ($photo->type == 1)
                                            <div class="col-1 my-2">
                                                <div class="edit-image-delete-btn about-photo">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
                                                        viewBox='0 0 24 24'>
                                                        <g transform='translate(-1752 -313)'>
                                                            <circle cx='12' cy='12' r='12'
                                                                transform='translate(1752 313)' fill='#eee' />
                                                            <g transform='translate(1759.713 321.212)' opacity='0.5'>
                                                                <line y2='12.127'
                                                                    transform='translate(8.575 0) rotate(45)'
                                                                    fill='none' stroke='#212121' stroke-linecap='round'
                                                                    stroke-width='1.5' />
                                                                <line y1='12.127'
                                                                    transform='translate(8.575 8.575) rotate(135)'
                                                                    fill='none' stroke='#212121' stroke-linecap='round'
                                                                    stroke-width='1.5' />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <img id="img-{{$photo->id}}" width="100%"
                                                    src="{{ asset('images/'.$photo->photo) }}" alt="">
                                            </div>
                                            @endif
                                            @endforeach
                                            <div class="col-12 my-3 order-last">
                                                <div class="row">
                                                    @foreach ($about->photos as $photo)
                                                    @if ($photo->type == 2)
                                                    <div class="col-4">
                                                        <div class="edit-image-delete-btn about-photo">
                                                            <svg xmlns='http://www.w3.org/2000/svg' width='24'
                                                                height='24' viewBox='0 0 24 24'>
                                                                <g transform='translate(-1752 -313)'>
                                                                    <circle cx='12' cy='12' r='12'
                                                                        transform='translate(1752 313)' fill='#eee' />
                                                                    <g transform='translate(1759.713 321.212)'
                                                                        opacity='0.5'>
                                                                        <line y2='12.127'
                                                                            transform='translate(8.575 0) rotate(45)'
                                                                            fill='none' stroke='#212121'
                                                                            stroke-linecap='round' stroke-width='1.5' />
                                                                        <line y1='12.127'
                                                                            transform='translate(8.575 8.575) rotate(135)'
                                                                            fill='none' stroke='#212121'
                                                                            stroke-linecap='round' stroke-width='1.5' />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <video id="video-{{$photo->id}}" width="100%" height="350"
                                                            controls style="object-fit: cover">
                                                            <source src="{{ asset('images/'. $photo->photo) }}"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="row mt-3"></div>
                                        <hr>
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="license" class="">Լիցենզիա</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input accept=".jpeg,.jpg, .png, .gif" name="licenses[]" id="license"
                                                    type="file" multiple class="custom-file-input-slider-license">
                                                <label class="custom-file-label" for="license"></label>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <input name="deleteAboutLicense[]" id="license" type="hidden" value="1">
                                            @if ($about->license && count($about->license))
                                            @foreach ($about->license as $photo)
                                            <div class="col-1">
                                                <div class="edit-image-delete-btn about-license">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
                                                        viewBox='0 0 24 24'>
                                                        <g transform='translate(-1752 -313)'>
                                                            <circle cx='12' cy='12' r='12'
                                                                transform='translate(1752 313)' fill='#eee' />
                                                            <g transform='translate(1759.713 321.212)' opacity='0.5'>
                                                                <line y2='12.127'
                                                                    transform='translate(8.575 0) rotate(45)'
                                                                    fill='none' stroke='#212121' stroke-linecap='round'
                                                                    stroke-width='1.5' />
                                                                <line y1='12.127'
                                                                    transform='translate(8.575 8.575) rotate(135)'
                                                                    fill='none' stroke='#212121' stroke-linecap='round'
                                                                    stroke-width='1.5' />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <img id="img-{{$photo->id}}" width="100%"
                                                    src="{{ asset('images/'.$photo->photo) }}" alt="">
                                            </div>
                                            @endforeach
                                        @endif
                                        </div>
                                    </div>
                                    <div class="position-relative form-group">
                                        @if ($about->event()->where('locale', 'hy')->first())
                                        <div id="info-container" class="row">
                                            <div class="col-12">
                                                <h3 class="year-event-title">Կարևոր իրադարձություններ</h3>
                                            </div>
                                            @foreach ($about->event as $event)
                                            @if ($event->locale == 'hy' && $event->type == 'key')
                                            <div class="col-12">
                                                <div class="row">
                                                <div class="position-relative form-group col-md-2">
                                                <label for="year_hy">Թվական</label>
                                                <input name="year_hy[]" id="year_hy" type="text" class="form-control"
                                                    value="{{ $event->value }}">
                                            </div>
                                            @endif
                                            @if($event->locale == 'hy' && $event->type == 'value')
                                            <div class="position-relative form-group col-md-9">
                                                <label for="event_hy">Բնութագիր</label>
                                                <textarea name="event_hy[]" class="form-control"
                                                    id="event_hy">{{ $event->value }}</textarea>
                                            </div>
                                            <div class="position-relative form-group col-md-1 mb-0 text-right">
                                                <button class="remove-input">
                                                <svg xmlns='http://www.w3.org/2000/svg' width='17.453' height='17.453' viewBox='0 0 17.453 17.453'><g transform='translate(-382.773 -829.94)'><g transform='translate(391.5 831.44) rotate(45)'><line x2='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line x1='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                                </button>
                                            </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="col-12 px-0">
                                            <button id="add-container-hy" class="add-event-btn"><img src="{{asset('icons/plus-icon.svg')}}"
                                                    alt=""></button>
                                        </div>
                                        @else
                                        <div id="info-container" class="row">
                                            <div class="col-12">
                                                <h3 class="year-event-title">Կարևոր իրադարձություններ</h3>
                                            </div>
                                            <div class="position-relative form-group col-md-2">
                                                <label for="year_hy">Թվական</label>
                                                <input name="year_hy[]" id="year_hy" type="text" class="form-control">
                                            </div>
                                            <div class="position-relative form-group col-md-10">
                                                <label for="event_hy">Բնութագիր</label>
                                                <textarea name="event_hy[]" class="form-control"
                                                    id="event_hy"></textarea>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-12 px-0">
                                            <button id="add-container-hy" class="add-event-btn"><img src="{{asset('icons/plus-icon.svg')}}"
                                                    alt=""></button>
                                        </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                                <div class="card-body">
                                    <div class="position-relative form-group">
                                        <label for="text_ru" class="">Տեքստ</label>
                                        <textarea required name="text_ru" id="editor2" cols="30" rows="10"
                                            class="form-control">
                                  {{$about->text_ru}}
                                </textarea>
                                    </div>
                                    <div class="position-relative form-group">
                                        @if ($about->event()->where('locale', 'ru')->first())
                                        <div id="info-container-ru" class="row">
                                            <div class="col-12">
                                                <h3 class="year-event-title">Կարևոր իրադարձություններ</h3>
                                            </div>
                                            @foreach ($about->event as $event)
                                            @if ($event->locale == 'ru' && $event->type == 'key')
                                            <div class="col-12">
                                                <div class="row">
                                                <div class="position-relative form-group col-md-2">
                                                <label for="year_ru">Թվական</label>
                                                <input name="year_ru[]" id="year_ru" type="text" class="form-control"
                                                    value="{{ $event->value }}">
                                            </div>
                                            @endif
                                            @if($event->locale == 'ru' && $event->type == 'value')
                                            <div class="position-relative form-group col-md-9">
                                                <label for="event_ru">Բնութագիր</label>
                                                <textarea name="event_ru[]" class="form-control"
                                                    id="event_ru">{{ $event->value }}</textarea>
                                            </div>
                                            <div class="position-relative form-group col-md-1 mb-0 text-right">
                                                <button class="remove-input">
                                                <svg xmlns='http://www.w3.org/2000/svg' width='17.453' height='17.453' viewBox='0 0 17.453 17.453'><g transform='translate(-382.773 -829.94)'><g transform='translate(391.5 831.44) rotate(45)'><line x2='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line x1='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                                </button>
                                            </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="col-12 px-0">
                                            <button id="add-container-ru" class="add-event-btn"><img
                                                    src="{{asset('icons/plus-icon.svg')}}" alt=""></button>
                                        </div>
                                        @else
                                        <div id="info-container-ru" class="row">
                                            <div class="col-12">
                                                <h3 class="year-event-title">Կարևոր իրադարձություններ</h3>
                                            </div>
                                            <div class="position-relative form-group col-md-2">
                                                <label for="year_ru">Թվական</label>
                                                <input name="year_ru[]" id="year_ru" type="text" class="form-control">
                                            </div>
                                            <div class="position-relative form-group col-md-10">
                                                <label for="event_ru">Բնութագիր</label>
                                                <textarea name="event_ru[]" class="form-control"
                                                    id="event_ru"></textarea>
                                            </div>

                                            <hr>
                                        </div>
                                        <div class="col-12 px-0">
                                            <button id="add-container-ru" class="add-event-btn"><img
                                                    src="{{asset('icons/plus-icon.svg')}}" alt=""></button>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                                <div class="card-body">
                                    <div class="position-relative form-group">
                                        <label for="text_en" class="">Տեքստ</label>
                                        <textarea required name="text_en" id="editor3" cols="30" rows="10"
                                            class="form-control">
                                  {{$about->text_en}}
                                </textarea>
                                    </div>
                                    <div class="position-relative form-group">
                                        @if ($about->event()->where('locale', 'en')->first())
                                        <div id="info-container-en" class="row">
                                            <div class="col-12">
                                                <h3 class="year-event-title">Կարևոր իրադարձություններ</h3>
                                            </div>
                                            @foreach ($about->event as $event)
                                            @if ($event->locale == 'en' && $event->type == 'key')
                                            <div class="col-12">
                                                <div class="row">
                                                <div class="position-relative form-group col-md-2">
                                                <label for="year_en">Թվական</label>
                                                <input name="year_en[]" id="year_en" type="text" class="form-control"
                                                    value="{{ $event->value }}">
                                            </div>
                                            @endif
                                            @if($event->locale == 'en' && $event->type == 'value')
                                            <div class="position-relative form-group col-md-9">
                                                <label for="event_en">Բնութագիր</label>
                                                <textarea name="event_en[]" class="form-control"
                                                    id="event_en">{{ $event->value }}</textarea>
                                            </div>
                                            <div class="position-relative form-group col-md-1 mb-0 text-right">
                                                <button class="remove-input">
                                                <svg xmlns='http://www.w3.org/2000/svg' width='17.453' height='17.453' viewBox='0 0 17.453 17.453'><g transform='translate(-382.773 -829.94)'><g transform='translate(391.5 831.44) rotate(45)'><line x2='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line x1='10.22' y2='10.22' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                                </button>
                                            </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="col-12 px-0">
                                            <button id="add-container-en" class="add-event-btn"><img
                                                    src="{{asset('icons/plus-icon.svg')}}" alt=""></button>
                                        </div>
                                        @else
                                        <div id="info-container-en" class="row">
                                            <div class="col-12">
                                                <h3 class="year-event-title">Կարևոր իրադարձություններ</h3>
                                            </div>
                                            <div class="position-relative form-group col-md-2">
                                                <label for="year_en">Թվական</label>
                                                <input name="year_en[]" id="year_en" type="text" class="form-control">
                                            </div>
                                            <div class="position-relative form-group col-md-10">
                                                <label for="event_en">Բնութագիր</label>
                                                <textarea name="event_en[]" class="form-control"
                                                    id="event_en"></textarea>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-12 px-0">
                                            <button id="add-container-en" class="add-event-btn"><img
                                                    src="{{asset('icons/plus-icon.svg')}}" alt=""></button>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-block text-right card-footer">
                            <button type="submit" class="btn-wide btn btn-success">Խմբագրել</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
