@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li>{{$post->title}}</li>
            </ol>
            <div class="text-page">
                <div class="title">
                    <h1>{{$post->title}}</h1>
                    <span><i class="fa fa-clock-o"></i>{{$post->human_date}}</span>
                    <span><i class="fa fa-eye"></i>{{$post->views}} مشاهدة</span>
                </div>
                <div class="big-img">
                    <img src="{{url($post->image)}}" class="img-responsive align-center" alt="">
                </div>
                <div class="item-desc">
                    <p>
                        {{$post->content}}
                    </p>
                </div>

            </div>

@stop