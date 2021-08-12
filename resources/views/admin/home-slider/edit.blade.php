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
    <form action="{{ route('home-slider.update', $item) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="main-card mb-3 card">
            <div class="card-header">ԳԼԽԱՎՈՐ ՍԼԱՅԴԵՐ
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
                                <input required name="title_hy" id="title" value="{{ $item->title_hy }}" type="text" class="form-control">
                                <p class="small-info">մաքս․ 50 սիմվոլ</p>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Նկարագրություն</label>
                                <input required name="description_hy" id="description" value="{{ $item->description_hy }}" type="text" class="form-control">
                                
                            </div>
                            <div class="position-relative form-group">
                                <label for="upload" class="">Նկար/վիդեո</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input accept=".jpeg,.jpg, .png, .gif, .mp4, .mov, .ogg" name="upload" id="upload" type="file" class="custom-file-input">
                                        <label class="custom-file-label" for="upload"></label>
                                    </div>
                                </div>
                                <div class="col-1 unset-height mt-3 pl-0">
                                   <img src="#" style="display: none" />
                                   <video style="display: none" controls width='320' class="home-slider-video">
                                       <source src="#" />
                                   </video>
                               </div>

                                <div class="row mt-3">
                                @if ($item->type == 1)
                                  <div class="col-1">
                                  <img width="100%" src="{{ asset('images/'.$item->photo) }}" alt="">
                                  </div>
                                @else
                                    <div class="col-12 my-3">
                                        <div class="row">
                                            <div class="col-4">
                                            <video width="100%" height="100%" controls>
                                                <source src="{{ asset('images/'. $item->photo) }}" type="video/mp4">
                                            </video>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="button" class="">Կոճակ</label>
                                <input required name="button_hy" id="button" value="{{ $item->button_hy }}" type="text" class="form-control" style="width: 50%">
                            </div>
                            <div class="position-relative form-group">
                                <label for="url" class="">Լինկ</label>
                                <input name="url" id="url" value="{{ $item->url }}" type="text" class="form-control" style="width: 50%">
                                <p class="small-info">Կոճակին սեղմելուց հետո հայտնվող էջը</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="title" class="">վերնագիր</label>
                                <input name="title_ru" id="title" value="{{ $item->title_ru }}" type="text" class="form-control">
                                <p class="small-info">մաքս․ 50 սիմվոլ</p>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Նկարագրություն</label>
                                <input name="description_ru" id="description" value="{{ $item->description_ru }}" type="text" class="form-control">
                                
                            </div>
                            <div class="position-relative form-group">
                                <label for="button" class="">Կոճակ</label>
                                <input name="button_ru" id="button" value="{{ $item->button_ru }}" type="text" class="form-control" style="width: 50%">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="title" class="">վերնագիր</label>
                                <input name="title_en" id="title" value="{{ $item->title_en }}" type="text" class="form-control">
                                <p class="small-info">մաքս․ 50 սիմվոլ</p>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Նկարագրություն</label>
                                <input name="description_en" id="description" value="{{ $item->description_en }}" type="text" class="form-control">
                                
                            </div>

                            <div class="position-relative form-group">
                                <label for="button" class="">Կոճակ</label>
                                <input name="button_en" id="button" value="{{ $item->button_en }}" type="text" class="form-control" style="width: 50%">
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
