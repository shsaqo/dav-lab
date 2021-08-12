@extends('layouts.adminLayouts.main-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
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
                    <strong>Անալիզ և գնացուցակ</strong>
            </div>
        </div>
        <div class="col-12">
            <div class="row align-items-start">
            <div class="col-9 main-col">
                <div class="row under-border">
                    <div class="col-5">
                        <div class="col-such-table-name">
                            <p>Հետազոտություններ</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <p>Տեսակ</p>
                    </div>
                    <div class="col-1 col-1-percent-value"><p>Հերթ</p></div>
                    <div class="col-2"></div>
                    <div class="col-2">
                    <div class="col-such-table-name">
                            <p class="text-right">Խմբագրել/Ջնջել</p>
                        </div>
                    </div>
                </div>
                @if (isset($items) && count($items))
                    @foreach ($items as $item)
                    <div class="row under-border pb-0">
                    @if ($item->child_count && $item->parent_id == null)
                        <div class="col-5">
                            <div class="name-content">
                            <p>{{ $item->name_hy }}</p>
                            </div>
                        </div>
                        <div class="col-2">
                        @if ($item->type == 1)
                                <p>Տեսակ 1</p>
                                @elseif($item->type == 2)
                                    <p>Տեսակ 2</p>
                                @else
                                <p>Նորմալ</p>
                            @endif
                        </div>
                        <div class="col-1 col-1-percent-value">
                            <p>{{ $item->order_by ?? '-' }}</p>
                        </div>
                        <div class="col-2 pb-2">
                            <div class="green-button-plus">
                                <button data-toggle="collapse" data-target="#collapseExample{{$item->id}}" type="submit" class="btn btn-link"><span><img src="{{asset('icons/plus-icon.svg')}}" alt=""></span>Բացել</button>
                            </div>

                        </div>
                        <div class="col-2">
                            <div class="d-flex justify-content-end">
                                <a class="btn" href="{{ route('analysis-category.edit', $item) }}">
                                    <img src="{{asset('icons/pen.svg')}}" alt="">
                                </a>
                                    <form action="{{ route('analysis-category.destroy', $item) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn" type="submit"><img src="{{asset('icons/trash.svg')}}" alt=""></button>
                                    </form>
                            </div>
                        </div>
                        <div class="col-12">
                            @foreach($item->child as $child)
                            <div class="collapse pl-5" id="collapseExample{{$item->id}}">
                                <div class="sub-category">
                                <div class="row align-items-center">
                                        <div class="col-5">
                                            <div class="name-content">
                                                <p>{{ $child->name_hy  }}</p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                        @if ($child->type == 1)
                                                    <p>Տեսակ 1</p>
                                                @elseif($child->type == 2)
                                                    <p>Տեսակ 2</p>
                                                @else
                                                    <p>Նորմալ</p>
                                                @endif
                                        </div>
                                        <div class="col-3 py-2">
                                            <form action="{{ route('element.index', $child) }}" method="get">
                                                <div class="green-button-plus"><button data-toggle="collapse" data-target="#collapseExample{{$child->id}}" type="submit" class="btn btn-link"><span><img src="{{asset('icons/plus-icon.svg')}}" alt=""></span>Բացել</button></div>
                                            </form>
                                        </div>
                                        <div class="col-2">
                                            <div class="d-flex justify-content-end">
                                                <a class="btn"
                                                href="{{ route('analysis-category.edit', $child) }}"><img src="{{asset('icons/pen.svg')}}" alt=""></a>
                                                <form action="{{ route('analysis-category.destroy', $child) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn" type="submit"><img src="{{asset('icons/trash.svg')}}" alt=""></button>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </div>

                            @endforeach
                        </div>
                    @elseif($item->child_count == 0 && $item->parent_id == null)
                    <div class="col-5">
                            <div class="name-content">
                            <p>{{ $item->name_hy }}</p>
                            </div>
                        </div>
                        <div class="col-2">
                        @if ($item->type == 1)
                                <p>Տեսակ 1</p>
                            @elseif($item->type == 2)
                                <p>Տեսակ 2</p>
                            @else
                                <p>Նորմալ</p>
                            @endif
                        </div>
                        <div class="col-1 col-1-percent-value">
                            <p>{{ $item->order_by ?? '-' }}</p>
                        </div>
                        <div class="col-2">
                        <form action="{{ route('element.index', $item) }}" method="get">
                            <div class="green-button-plus"><button data-toggle="collapse" data-target="#collapseExample{{$item->id}}" type="submit" class="btn btn-link"><span><img src="{{asset('icons/plus-icon.svg')}}" alt=""></span>Բացել</button></div>
                        </form>
                        </div>
                        <div class="col-2">
                            <div class="d-flex justify-content-end">
                                <a class="btn"
                                href="{{ route('analysis-category.edit', $item) }}"><img src="{{asset('icons/pen.svg')}}" alt=""></a>
                                <form action="{{ route('analysis-category.destroy', $item) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn" type="submit"><img src="{{asset('icons/trash.svg')}}" alt=""></button>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>

                    @endforeach
                @endif
            </div>
                <div class="col-3 ml-0 mx-0">
                    <div class="d-flex flex-column align-items-start">
                        @if (Session::has('ok'))
                            <div class="alert alert-info">{{ Session::get('ok') }}</div>
                        @endif
                            <button type="button" class="btn w-100 py-2 mr-2 mb-2 btn-success float-right ml-1" data-toggle="modal" data-target="#create">
                                Ավելացնել բաժին
                            </button>
                            <button @if(count($categories) == 0) disabled @endif type="button" class="btn w-100 py-2 mr-2 mb-2 btn-outline-secondary float-right ml-1" data-toggle="modal" data-target="#createSub">
                                Ավելացնել ենթաբաժին
                            </button>
                            <button @if(count($categories) == 0)  @endif type="button" class="btn py-2 mr-2 mb-2 text-success float-right ml-1" data-toggle="modal" data-target="#PromptText">
                                + Հուշող տեքստ
                            </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
