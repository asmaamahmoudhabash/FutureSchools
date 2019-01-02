@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li>{{$page->title}}</li>
            </ol>
            <div class="text-page">
                <div class="title">
                    <h1>{{$page->title}}</h1>
                    <span><i class="fa fa-clock-o"></i>{{$page->human_date}}</span>
                    <span><i class="fa fa-eye"></i>{{$page->views}} مشاهدة</span>
                </div>
                <div class="big-img">
                    <img src="{{url($page->image)}}" class="img-responsive align-center" alt="">
                </div>
                <div class="item-desc">
                    <p>
                        {{$page->content}}
                    </p>
                </div>
                {{--<div class="item-video">--}}
                    {{--<iframe src="https://www.youtube.com/embed/R5vw09SXzTs" frameborder="0" allowfullscreen></iframe>--}}
                {{--</div>--}}
                {{--<div class="share">--}}
                    {{--<img src="assets/images/share.png" alt="">--}}
                {{--</div>--}}
            </div>

@stop