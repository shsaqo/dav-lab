@extends('layouts.adminLayouts.main-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="m-3">
    <a href="{{ url()->previous() }}  " class="go-back-btn d-inline-flex align-items-center"><img class="mr-2" src="{{asset('icons/arrow-green.svg')}}"/>Հետ</a><br>
</div>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
<form id="about-us-form" class="form" action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="main-card mb-3 card">
        <div class="card-header">Մեր մասին
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm nav btn-group">
                    <a data-toggle="tab" href="#tab-eg1-0" class="btn-shadow btn btn-primary active language-changers">Հայերեն</a>
                    <a data-toggle="tab" href="#tab-eg1-1" class="btn-shadow btn btn-primary language-changers">Ռուսերեն</a>
                    <a data-toggle="tab" href="#tab-eg1-2" class="btn-shadow btn btn-primary language-changers">Անգլերեն</a>
                </div>
            </div>
</div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                        <div class="card-body pb-0">
                            <div class="position-relative form-group">
                                <label for="text_hy" class="">Տեքստ</label>
                                <textarea name="text_hy" id="editor" cols="30" rows="10">
                                </textarea>
                            </div>

                        <div id="slider-form-group" class="position-relative form-group">
                            <label for="upload" class="">Նկար/վիդեո</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input accept=".jpeg, .jpg, .png, .gif, .mp4, .mov, .ogg" name="uploads[]" id="upload" type="file" multiple class="custom-file-input-slider-image">
                                    {{--api-ին դիմել upload name-ով--}}
                                    {{--hidden type value 1 or 2--}}
                                    <label class="custom-file-label" for="upload"></label>
                                </div>
                            </div>
                            <div id="slide-container1" class="row mt-3"></div>
                        </div>

                        <div id="slider-form-group" class="position-relative form-group">
                            <label for="license" class="">Լիցենզիա</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input accept=".jpeg,.jpg, .png, .gif" name="licenses[]" id="license" type="file" multiple class="custom-file-input-slider-license">
                                    <input type="hidden" name="type" value="1">
                                    <label class="custom-file-label" for="license"></label>
                                </div>
                            </div>
                            <div id="slide-container2" class="row mt-3"></div>
                        </div>
                        <div id="info-container" class="row container">
                                <div class="col-12 pl-0"><h3 class="year-event-title">Կարևոր իրադարձություններ</h3></div>
                                <div class="position-relative form-group col-md-2 pl-0">
                                    <label for="year_hy">Թվական</label>
                                    <input name="year_hy[]" id="year_hy" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group col-md-10 pl-0">
                                    <label for="event_hy">Բնութագիր</label>
                                    <textarea name="event_hy[]" id="event_hy" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row m-0 align-items-center">
                                <div class="col-12 card-body py-0 pl-0">
                                    <button id="add-container-hy" class="add-event-btn"><img src="{{asset('icons/plus-icon.svg')}}" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="text_ru" class="">Տեքստ</label>
                                <textarea name="text_ru" id="editor2" cols="30" rows="10">
                                </textarea>
                            </div>
                            <div id="info-container-ru" class="row">
                                <div class="col-12 pl-0"><h3 class="year-event-title">Կարևոր իրադարձություններ</h3></div>
                                <div class="position-relative form-group col-md-2 pl-0">
                                    <label for="year_ru">Թվական</label>
                                    <input name="year_ru[]" id="year_ru" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group col-md-10 pl-0">
                                    <label for="event_ru">Բնութագիր</label>
                                    <textarea name="event_ru[]" id="event_ru" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button id="add-container-ru" class="add-event-btn"><img src="{{asset('icons/plus-icon.svg')}}" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="text_en" class="">Տեքստ</label>
                                <textarea name="text_en" id="editor3" cols="30" rows="10">
                                </textarea>
                            </div>
                            <div id="info-container-en" class="row">
                                <div class="col-12 pl-0"><h3 class="year-event-title">Կարևոր իրադարձություններ</h3></div>
                                <div class="position-relative form-group col-md-2 pl-0">
                                    <label for="year_en">Թվական</label>
                                    <input name="year_en[]" id="year_en" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group col-md-10 pl-0">
                                    <label for="event_en">Բնութագիր</label>
                                    <textarea name="event_en[]" id="event_en" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button id="add-container-en" class="add-event-btn"><img src="{{asset('icons/plus-icon.svg')}}" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block text-right card-footer">
                <button type="submit" class="btn-wide btn btn-success">Ավելացնել</button>
            </div>
        </div>
    </form>

@endsection
