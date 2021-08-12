@extends('layouts.adminLayouts.main-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class='modal-body'>
                <div class="mt-3">
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
            </div>
        </div>
        <div class="col-12">
            <div class='modal-body pt-0'>
                    <strong>Անալիզ և գնացուցակ</strong>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('analysis-category.update', $analysisCategory) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="modal-body">
                        <label for="hy">Հայերեն*</label>
                        <input required name="name_hy" id="hy" class="form-control" type="text" value="{{ $analysisCategory->name_hy }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="modal-body">
                        <label for="ru">Ռուսերեն</label>
                        <input name="name_ru" id="ru" class="form-control" type="text" value="{{ $analysisCategory->name_ru }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="modal-body">
                        <label for="en">Անգլերեն</label>
                        <input name="name_en" id="en" class="form-control" type="text" value="{{ $analysisCategory->name_en }}">
                    </div>
                </div>

                @if($analysisCategory->parent_id == null)
                    <div class="form-group">
                        <div class="modal-body">
                            <label for="order_by">Հերթ</label>
                            <input name="order_by" id="order_by" class="form-control" type="number" value="{{ $analysisCategory->order_by }}">
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <div class="modal-body">
                        <label for="type">Տեսակ</label>
                        <select class="form-control" name="type" id="type">
                            <option @if($analysisCategory->type == 0) selected @endif value="0">Նորմալ</option>
                            <option @if($analysisCategory->type == 1) selected @endif value="1">Տեսակ 1</option>
                            <option @if($analysisCategory->type == 2) selected @endif value="2">Տեսակ 2</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer bg-white border-0">
                    <button type="submit" class="btn btn-success">Պահպանել</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
