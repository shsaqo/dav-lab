@extends('layouts.adminLayouts.main-admin')
@section('content')
    <div class="container news-container">
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
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <ul>
                                    <li>{{ session()->get('error') }}</li>
                            </ul>
                        </div>
                    @endif
        <a href="{{ url()->previous() }}  " class="go-back-btn d-inline-flex align-items-center"><img class="mr-2" src="{{asset('icons/arrow-green.svg')}}"/>Հետ</a><br>
    </div>
    <form id="news-form" class="form" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="main-card mb-3 card">
            <div class="card-header">Ավելացնել նորություն
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
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="title" class="">վերնագիր</label>
                                <input required name="title_hy" id="title" placeholder="վերնագիր" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Տեքստ</label>
                                <textarea name="text_hy" id="editor" cols="30" rows="10">
                                </textarea>
                            </div>
                            <div class="position-relative form-group">
                                <label for="upload" class="">Նկար</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input accept=".jpeg,.jpg, .png, .gif" required name="upload" id="upload" type="file" class="custom-file-input create">
                                        <label class="custom-file-label" for="upload"></label>
                                    </div>
                                </div>
                                <div class='col-1 mt-3'>
                                    <img src="#" style="display: none" />
                                    <video style="display: none" controls width="100%">
                                        <source src="#" />
                                    </video>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="url" class="">Լինկ</label>
                                <input required name="url" id="url" placeholder="Լինկ" type="text" class="form-control" style="width: 50%">
                            </div>
                            <div id="slider-form-group" class="position-relative form-group">
                                <label for="otherPhoto" class="">Կցել Այլ Նկարներ/վիդեոներ</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input accept=".jpeg,.jpg, .png, .gif, .mp4, .mov, .ogg" type="file" multiple name="otherPhotos[]" id="otherPhoto" class="custom-file-input-slider">
{{--                                        <input type="hidden" name="is_type" value="1">--}}
                                        <label class="custom-file-label" for="otherPhoto"></label>
                                    </div>
                                </div>
                                <div id="slide-container1" class="row mt-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="title" class="">վերնագիր</label>
                                <input name="title_ru" id="title" placeholder="վերնագիր" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Տեքստ</label>
                                <textarea name="text_ru" id="editor2" cols="30" rows="10">
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="title" class="">վերնագիր</label>
                                <input name="title_en" id="title" placeholder="վերնագիր" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Տեքստ</label>
                                <textarea name="text_en" id="editor3" cols="30" rows="10">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-12'>
                <div class="d-block text-right card-footer">
                    <button type="submit" class="btn-wide btn btn-success">Ավելացնել</button>
                </div>
            </div>
        </div>
    </form>
            </div>
        </div>
    </div>

@endsection
