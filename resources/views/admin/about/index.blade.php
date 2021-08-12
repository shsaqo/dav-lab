@extends('layouts.adminLayouts.main-admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="my-3 mx-0">
        @if (Session::has('ok'))
            <div class="alert alert-info">{{ Session::get('ok') }}</div>
        @endif
        <strong>Մեր մասին</strong>
            
    </div>
    <div class="row">
    <div class="col-10">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="" class="table table-hover table-striped m-0">
                    <thead>
                    <tr>
                        <th>N</th>
                        <th>Ամսաթիվ</th>
                        <th>Տեքստ</th>
                        <th>Խմբագրել/Ջնջել</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($items) && count($items))
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td class="disable-inner-styles-for-view">{!! Str::limit($item->text_hy, 68) !!}</td>
                                <td class="d-flex justify-content-end">
                                    <a class="btn" href="{{ route('about.edit', $item->id) }}"><img src="{{asset('icons/pen.svg')}}" alt=""></a>
                                    <form action="{{ route('about.destroy', $item) }}" method="post">
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
    @if (count($items) == 0)
        <a href="{{ route('about.create') }}" class="btn-icon btn btn-success float-right">Ավելացնել</a>
    @endif
    </div>
    </div>
            </div>
        </div>
    </div>
@endsection
