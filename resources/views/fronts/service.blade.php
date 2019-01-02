@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="">خدماتنا</a></li>
                <li>{{$service->title}}</li>
            </ol>
            <div class="text-page">
                <div class="title">
                    <h1>{{$service->title}}</h1>
                    <span><i class="fa fa-clock-o"></i>{{$service->human_date}}</span>
                    <span><i class="fa fa-eye"></i>{{$service->views}} مشاهدة</span>
                </div>
                <div class="big-img">
                    <img src="{{url($service->image)}}" class="img-responsive align-center" alt="">
                </div>
                <div class="item-desc">
                    <p>
                        {{$service->content}}
                    </p>
                </div>

            </div>

@stop