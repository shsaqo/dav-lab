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
                    <a href="{{ url()->previous() }}" class="go-back-btn d-inline-flex align-items-center"><img class="mr-2" src="{{asset('icons/arrow-green.svg')}}"/>Հետ</a><br>
                </div>
                <form action="{{ route('element.update', $item) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <div class="btn-actions-pane-right">
                                <div role="group" class="btn-group-sm nav btn-group">
                                    <a data-toggle="tab" href="#tab-eg1-0" class="btn-shadow btn btn-primary active language-changers">Հայերեն</a>
                                    <a data-toggle="tab" href="#tab-eg1-1" class="btn-shadow btn btn-primary language-changers">Ռուսերեն</a>
                                    <a data-toggle="tab" href="#tab-eg1-2" class="btn-shadow btn btn-primary language-changers">Անգլարեն</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                    <div class="card-body">
                                        <div class="position-relative form-group">
                                            <label for="name_hy" class="">Անուն</label>
                                            <input required name="name_hy" id="name_hy" value="{{ $item->name_hy }}" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="price" class="">Գին</label>
                                            <input required name="price" id="price" value="{{ $item->price }}" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="text_hy" class="">Հուշող տեքստ</label>
                                            <input required name="prompt_text_hy" id="text_hy" value="{{ $item->prompt_text_hy }}" type="text" class="form-control">
                                        </div>

                                        <div class="position-relative form-group">
                                            <label for="order_by" class="">Հերթ</label>
                                            <input name="order_by" id="order_by" value="{{ $item->order_by }}" type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                                    <div class="card-body">
                                        <div class="position-relative form-group">
                                            <label for="name_ru" class="">Անուն</label>
                                            <input name="name_ru" id="name_ru" value="{{ $item->name_ru }}" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="text_ru" class="">Հուշող տեքստ</label>
                                            <input name="prompt_text_ru" id="text_ru" value="{{ $item->prompt_text_ru }}" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                                    <div class="card-body">
                                        <div class="position-relative form-group">
                                            <label for="name_en" class="">Անուն</label>
                                            <input name="name_en" id="name_en" value="{{ $item->name_en }}" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="text_en" class="">Հուշող տեքստ</label>
                                            <input name="prompt_text_en" id="text_en" value="{{ $item->prompt_text_en }}" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-12'>
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
