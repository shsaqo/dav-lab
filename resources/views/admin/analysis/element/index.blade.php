@extends('layouts.adminLayouts.main-admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-3">
                <div class="my-3">
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
                    @if (Session::has('ok'))
                        <div class="alert alert-info">{{ Session::get('ok') }}</div>
                    @endif
                    <strong>Ընդհանուր կլինիկական հետազոտություններ</strong>

                </div>
                <div class="row">
                <div class="col-12">
                        <div class="form-group add-category-price-and-name">
                            <form action="{{ route('element.store', $item) }}" method="post">
                                @csrf
                                <div class="row align-items-end">
                                <div class='col-6'>
                                  <div class="">
                                      <label for="type-labnel-1">Տեսակ*</label>
                                      <input required name="name_hy" id='type-labnel-1' type="text" class="form-control w-100">
                                    </div>
                                </div>
                                <div class='col-2'>
                                   <div class="">
                                       <label for="type-labnel-2">Գին*</label>
                                    <input required name="price" id='type-labnel-2' type="text" class="form-control w-100">
                                   </div>
                                </div>

                                    <div class='col-2'>
                                        <div class="">
                                            <label for="order_by">Հերթ</label>
                                            <input required name="order_by" id='order_by' type="number" class="form-control w-100">
                                        </div>
                                    </div>

                                <div class="col-2">
                                   <div class="">
                                   <button type="submit" class="btn btn-success w-100"> Ավելացնել </button>
                                   </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table style="width: 100%;" id="" class="table table-hover table-striped m-0">
                                    <thead>
                                    <tr>
                                        <th>Տեսակ</th>
                                        <th>Գին</th>
                                        <th>Հերթ</th>
                                        <th class="text-right">Խմբագրել/Ջնջել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item->element as $element)
                                            <tr>
                                                <td>{{ Str::limit($element->name_hy, 50) }}</td>
                                                <td>{{ $element->price }}</td>
                                                <td>{{ $element->order_by ?? '-' }}</td>
                                                <td class="d-flex justify-content-end">
                                                    <a class="btn" href="{{ route('element.edit', $element->id) }}"><img src="{{asset('icons/pen.svg')}}" alt=""></a>
                                                    <form action="{{ route('element.destroy', $element->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn" type="submit"><img src="{{asset('icons/trash.svg')}}" alt=""></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
