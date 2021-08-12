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
            <a href="{{ url()->previous() }}  " class="go-back-btn">Հետ</a><br>
        </div>
<form action="{{ route('home-slider.store') }}" method="post" enctype="multipart/form-data">
    @csrf
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
                                <input required name="title_hy" id="title" placeholder="վերնագիր" type="text" class="form-control">
                                <p class="small-info">մաքս․ 50 սիմվոլ</p>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Նկարագրություն</label>
                                <input required name="description_hy" id="description" placeholder="Նկարագրություն" type="text" class="form-control">
                                
                            </div>
                            <div class="position-relative form-group">
                                <label for="upload" class="">Նկար/վիդեո</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input accept=".jpeg,.jpg, .png, .gif, .mp4, .mov, .ogg" required name="upload" id="upload" type="file" class="custom-file-input">
                                        <label class="custom-file-label" for="upload"></label>
                                    </div>
                                </div>
                                <div class='col-1 mt-3 unset-height pl-0'>
                                    <img src="#" style="display: none" />
                                    <video width="320" style="display: none" controls>
                                        <source src="#" />
                                    </video>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="button" class="">Կոճակ</label>
                                <input required name="button_hy" id="button" placeholder="Կոճակ" type="text" class="form-control" style="width: 50%">
                            </div>
                            <div class="position-relative form-group">
                                <label for="url" class="">Լինկ</label>
                                <input name="url" id="url" placeholder="Լինկ" type="text" class="form-control" style="width: 50%">
                                <p class="small-info">Կոճակին սեղմելուց հետո հայտնվող էջը</p>
                            </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                    <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="title" class="">վերնագիր</label>
                                <input name="title_ru" id="title" placeholder="վերնագիր" type="text" class="form-control">
                                <p class="small-info">մաքս․ 50 սիմվոլ</p>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Նկարագրություն</label>
                                <input name="description_ru" id="description" placeholder="Նկարագրություն" type="text" class="form-control">
                                
                            </div>
                            <div class="position-relative form-group">
                                <label for="button" class="">Կոճակ</label>
                                <input name="button_ru" id="button" placeholder="Կոճակ" type="text" class="form-control" style="width: 50%">
                            </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                    <div class="card-body">
                            <div class="position-relative form-group">
                                <label for="title" class="">վերնագիր</label>
                                <input name="title_en" id="title" placeholder="վերնագիր" type="text" class="form-control">
                                <p class="small-info">մաքս․ 50 սիմվոլ</p>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Նկարագրություն</label>
                                <input name="description_en" id="description" placeholder="Նկարագրություն" type="text" class="form-control">
                                
                            </div>

                            <div class="position-relative form-group">
                                <label for="button" class="">Կոճակ</label>
                                <input name="button_en" id="button" placeholder="Կոճակ" type="text" class="form-control" style="width: 50%">
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
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
