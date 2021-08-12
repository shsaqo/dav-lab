@extends('layouts.adminLayouts.main-admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-3 mx-0">
                    @if (Session::has('ok'))
                        <div class="alert alert-info">{{ Session::get('ok') }}</div>
                    @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <strong>Ուղղեգիր *</strong>

                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('direction.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control" name="name_hy">
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input accept=".jpeg, .jpg, .png, .gif" name="upload" id="uploadDirection" type="file" class="custom-file-input">
                                            <label class="custom-file-label" for="uploadDirection"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button type="submit"
                                       class="btn-icon btn btn-success float-right">Ավելացնել</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <div class="col-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table style="width: 100%;" id="" class="table table-hover table-striped m-0">
                                    <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Լոգո</th>
                                        <th>Բուժ․ Հաստատությունների Ցուցակ</th>
                                        <th class="text-right">Խմբագրել/Ջնջել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (isset($items) && count($items))
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img width="75" src="{{ asset('images/'.$item->logo) }}" alt=""></td>
                                                <td>{{ Str::limit($item->name_hy, 70) }}</td>
                                                <td class="d-flex justify-content-end">
                                                    <a class="btn" href="{{ route('direction.edit', $item->id) }}"><img
                                                            src="{{asset('icons/pen.svg')}}" alt=""></a>
                                                    <form action="{{ route('direction.destroy', $item) }}"
                                                          method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn" type="submit"><img
                                                                src="{{asset('icons/trash.svg')}}" alt=""></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
