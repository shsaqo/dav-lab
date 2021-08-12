@php $categories = App\Models\AnalysisCategory::where([['element_count', 0], ['parent_id', null]])->get(); @endphp
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dav Lab</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('admin-style/main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-style/main.css') }}" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    @include('admin.header')
        <div class="app-main">
            @include('admin.bar')
            <div class="app-main__outer ml-1 mt-1 bg-white">
                @yield('content')
            </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>

<!-- modals -->
<div class="analyzes-modal-parent">
    <div class="modal fade" id="PromptText" tabindex="-1" role="dialog" aria-labelledby="PromptTextModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ավելացնել</h5>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('promptText') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="hidden" name="sub" value="1">
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="hy">Հայերեն*</label>
                                        <input required name="text_hy" id="hy" class="form-control" type="text" value="{{ $promptText->text_hy ?? '' }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="modal-body">  <label for="ru">Ռուսերեն</label>
                                        <input name="text_ru" id="ru" class="form-control" type="text" value="{{ $promptText->text_ru ?? '' }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="en">Անգլերեն</label>
                                        <input name="text_en" id="en" class="form-control" type="text" value="{{ $promptText->text_en ?? '' }}" />
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary" data-dismiss="modal">Փակել</button>
                                    <button type="submit" class="btn btn-success">Ավելացնել</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="createSub" tabindex="-1" role="dialog" aria-labelledby="createSubModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ենթաբաժնի անուն</h5>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('analysis-category.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="sub" value="1">
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="hy">Հայերեն*</label>
                                        <input required name="name_hy" id="hy" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="ru">Ռուսերեն</label>
                                        <input name="name_ru" id="ru" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="en">Անգլերեն</label>
                                        <input name="name_en" id="en" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="modal-body select-modal-bdy">
                                        <label for="en">Ընտրեք գլխավոր բաժինը</label>
                                        <select required name="parent_id" class="form-control">
                                            <option></option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name_hy }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="type">Տեսակ</label>
                                        <select class="form-control" name="type" id="type">
                                            <option value="1">Տեսակ 1</option>
                                            <option value="2">Տեսակ 2</option>
                                            <option value="0">Նորմալ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary" data-dismiss="modal">Մերժել</button>
                                    <button type="submit" class="btn btn-success">Պահպանել</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Հետազոտության անուն</h5>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('analysis-category.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="hy">Հայերեն*</label>
                                        <input required name="name_hy" id="hy" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="ru">Ռուսերեն</label>
                                        <input name="name_ru" id="ru" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="en">Անգլերեն</label>
                                        <input name="name_en" id="en" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="order_by">Հերթ</label>
                                        <input name="order_by" id="order_by" class="form-control" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="modal-body">
                                        <label for="type">Տեսակ</label>
                                        <select class="form-control" name="type" id="type">
                                            <option value="1">Տեսակ 1</option>
                                            <option value="2">Տեսակ 2</option>
                                            <option value="0">Նորմալ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary" data-dismiss="modal">Մերժել</button>
                                    <button type="submit" class="btn btn-success">Պահպանել</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- modals end -->


<script type="text/javascript" src="{{ asset('admin-style/assets/scripts/main.d810cf0ae7f39f28f336.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('davlab/js/upload.js') }}"></script>
<script type="text/javascript" src="{{ asset('davlab/js/admin.js') }}"></script>
<script type="text/javascript" src="{{ asset('davlab/js/validation.js') }}"></script>
</body>
</html>
