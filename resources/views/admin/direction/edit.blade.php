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
                    <a href="{{ url()->previous() }}  " class="go-back-btn d-inline-flex align-items-center"><img class="mr-2" src="{{asset('icons/arrow-green.svg')}}"/>Հետ</a><br>
                </div>
                <form action="{{ route('direction.update', $item) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="main-card mb-3 card">
                        <div class="card-header">ՈՒղղեգիր
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
                                            <label for="text_hy" class="">Տեքստ</label>
                                            <input required name="name_hy" id="name_hy" value="{{ $item->name_hy }}" type="text"
                                                   class="form-control">
                                        </div>

                                        <div class="position-relative form-group">
                                            <label for="upload" class="">Լոգո</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input accept=".jpeg,.jpg, .png, .gif, .mp4, .mov, .ogg" name="upload" id="upload" type="file" class="custom-file-input">
                                                    <label class="custom-file-label" for="upload"></label>
                                                </div>
                                            </div>
                                            <div class='col-1 mt-3 unset-height pl-0'>
                                               <img src="#" style="display: none" />
                                               <video style="display: none" controls width="100%">
                                                   <source src="#" />
                                               </video>
                                           </div>
                                            @if ($item->logo)
                                                <div class="row mt-3">
                                                    <div class="col-1">
                                                        <img id="img-{{$item->id}}" width="100%" src="{{ asset('images/'.$item->logo) }}" alt="">
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                                    <div class="card-body">
                                        <div class="position-relative form-group">
                                            <label for="text_ru" class="">Տեքստ</label>
                                            <input name="name_ru" id="text_ru" value="{{ $item->name_ru }}" type="text"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                                    <div class="card-body">
                                        <div class="position-relative form-group">
                                            <label for="text_en" class="">Տեքստ</label>
                                            <input name="name_en" id="text_en" value="{{ $item->name_en }}" type="text"
                                                   class="form-control">
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
