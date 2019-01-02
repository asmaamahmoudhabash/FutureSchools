@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('albums')}}">معرض الصور</a></li>
                <li>{{$album->title}}</li>
            </ol>
            <div class="text-page">
                <div class="title">
                    <h1>{{$album->title}}</h1>
                    <span><i class="fa fa-clock-o"></i>{{$album->human_date}}</span>
                    <span><i class="fa fa-eye"></i>{{$album->views}} مشاهدة</span>
                </div>
                <div class="big-img">
                    <img src="{{url($album->image)}}" class="img-responsive align-center" alt="">
                </div>
                <div class="home-album">
                    <h3>ألبوم الصور</h3>
                    <ul class="list-unstyled no-margin clearfix">
                        @php $count = 1 @endphp
                        @foreach($album->photos as $photo)
                            <li class="col-md-3 col-sm-3 col-xs-6 col-padding-5">
                                <a href="{{url($photo->url)}}" rel="prettyPhoto"><img src="{{url($photo->url)}}" class="img-responsive" alt=""></a>
                            </li>
                            @if($count % 4 == 0)
                                <div class="clearfix"></div>
                            @endif
                            @php
                            $count ++;
                            @endphp
                        @endforeach
                    </ul>
                </div>
                <div class="item-desc">
                    <p>
                        {{$album->content}}
                    </p>
                </div>

            </div>

@stop