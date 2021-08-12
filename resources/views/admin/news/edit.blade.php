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
         <form id="news-form" class="form" action="{{ route('news.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="main-card mb-3 card">
               <div class="card-header">
                  Նորություններ
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
                              <input required name="title_hy" id="title" value="{{ $item->title_hy }}" type="text"
                                 class="form-control">
                           </div>
                           <div class="position-relative form-group">
                              <label for="description" class="">Տեքստ</label>
                              <textarea required name="text_hy" id="editor" cols="30" rows="10" class="form-control">
                                {{$item->text_hy}}
                              </textarea>
                           </div>
                           <div class="position-relative form-group">
                              <label for="upload" class="">Նկար</label>
                              <div class="input-group">
                                    <div class="custom-file">
                                        <input id="custom-file-input" accept=".jpeg,.jpg, .png, .gif" name="upload" id="upload" type="file" class="custom-file-input">
                                        <label class="custom-file-label" for="upload"></label>
                                    </div>
                               </div>
                               <div class='col-1 mt-3 unset-height pl-0'>
                                   <img src="#" style="display: none" />
                                   <video style="display: none" controls width="100%">
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
                              <label for="url" class="">Լինկ</label>
                              <input name="url" id="url" value="{{ $item->url }}" type="text" class="form-control"
                                 style="width: 50%">
                           </div>
                           <div id="#slider-form-group" class="position-relative form-group">
                              <label for="otherPhoto" class="">Կցել Այլ Նկարներ/վիդեոներ</label>
                              {{--                                <input name="deleteNewsFiles[]" type="hidden" value="1">--}}
                              <div class="input-group">
                                    <div class="custom-file">
                                        <input accept=".jpeg,.jpg, .png, .gif, .mp4, .mov, .ogg" name="otherPhotos[]" id="otherPhoto" type="file" multiple class="custom-file-input-slider">
{{--                                        <input type="hidden" name="is_type" value="1">--}}
                                        <label class="custom-file-label" for="otherPhoto"></label>
                                    </div>
                              </div>
                              <div class="row mt-3 news-edit-images-parent">
                                 @foreach ($item->newsPhotos as $newsPhotos)
                                 @if ($newsPhotos->is_type == 1)
                                 <div class="col-1">
                                    <div class="edit-image-delete-btn news-edit">
                                       <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><g transform='translate(-1752 -313)'><circle cx='12' cy='12' r='12' transform='translate(1752 313)' fill='#eee'/><g transform='translate(1759.713 321.212)' opacity='0.5'><line y2='12.127' transform='translate(8.575 0) rotate(45)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line y1='12.127' transform='translate(8.575 8.575) rotate(135)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                    </div>
                                    <img id="del-{{ $newsPhotos->id }}" class="" width="100%" src="{{ asset('images/'.$newsPhotos->news_other_photo) }}" alt="">
                                 </div>
                                 @endif
                                 @endforeach
                                 <div class="col-12 my-3 order-last">
                                        <div class="row">
                                 @foreach ($item->newsPhotos as $newsPhotos)
                                 @if ($newsPhotos->is_type == 2)
                                            <div class="col-4">
                                            <button class="edit-image-delete-btn news-edit">
                                                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><g transform='translate(-1752 -313)'><circle cx='12' cy='12' r='12' transform='translate(1752 313)' fill='#eee'/><g transform='translate(1759.713 321.212)' opacity='0.5'><line y2='12.127' transform='translate(8.575 0) rotate(45)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/><line y1='12.127' transform='translate(8.575 8.575) rotate(135)' fill='none' stroke='#212121' stroke-linecap='round' stroke-width='1.5'/></g></g></svg>
                                             </button>
                                            <video id="del-{{ $newsPhotos->id }}" class="edit-video-news" width="100%" height="350" controls>
                                                <source src="{{ asset('images/'. $newsPhotos->news_other_photo) }}"
                                                type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            </div>

                                 @endif
                                 @endforeach
                                 </div>
                                    </div>

                                 <br>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="tab-eg1-1" role="tabpanel">
                        <div class="card-body">
                           <div class="position-relative form-group">
                              <label for="title" class="">վերնագիր</label>
                              <input name="title_ru" id="title" value="{{ $item->title_ru }}" type="text"
                                 class="form-control">
                           </div>
                           <div class="position-relative form-group">
                              <label for="description" class="">Տեքստ</label>
                              <textarea required name="text_ru" id="editor2" cols="30" rows="10" class="form-control">
                                  {{$item->text_ru}}
                               </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="tab-eg1-2" role="tabpanel">
                        <div class="card-body">
                           <div class="position-relative form-group">
                              <label for="title" class="">վերնագիր</label>
                              <input name="title_en" id="title" value="{{ $item->title_en }}" type="text"
                                 class="form-control">
                           </div>
                           <div class="position-relative form-group">
                              <label for="description" class="">Տեքստ</label>
                              <textarea required name="text_en" id="editor3" cols="30" rows="10" class="form-control">
                                 {{$item->text_en}}
                              </textarea>
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
