@extends('layouts.adminLayouts.main-admin')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                        <div class="my-3">
                        @if (Session::has('ok'))
                            <div class="alert alert-info">{{ Session::get('ok') }}</div>
                        @endif
                        <strong>Գլխավոր Սլայդեր</strong>
                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="main-card mb-3 card">
                                <div class="card-body p-0">
                                    <table style="width: 100%;" id="" class="table table-hover table-striped m-0">
                                        <thead>
                                        <tr>
                                            <th>N</th>
                                            <th>Նկար</th>
                                            <th>Ամսաթիվ</th>
                                            <th>Վերնագիր</th>
                                            <th>Կոճակ</th>
                                            <th>Խմբագրել/Ջնջել</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (isset($items) && count($items))
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="">
                                                        @if ($item->type == 1)
                                                            <img src="{{ asset('images/'.$item->photo) }}" alt="" width="40">
                                                        @else
                                                            <video width="40" height="40" controls>
                                                                <source src="{{ asset('images/'. $item->photo) }}" type="video/mp4">
                                                            </video>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ Str::limit($item->title_hy, 42) }}</td>
                                                    <td>{{ Str::limit($item->button_hy, 15) }}</td>
                                                    <td class="d-flex justify-content-end">
                                                        <a class="btn" href="{{ route('home-slider.edit', $item) }}"><img src="{{asset('icons/pen.svg')}}" alt=""></a>
                                                        <form action="{{ route('home-slider.destroy', $item) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn" type="submit"><img src="{{asset('icons/trash.svg')}}" alt=""></button>
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
                        
                        <div class="col-2">
                            <a href="{{ route('home-slider.create') }}" class="btn-icon btn btn-success float-right">Ավելացնել սլայդ</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
