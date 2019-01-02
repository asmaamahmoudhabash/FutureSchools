@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home"></i></a></li>
                <li>خدماتنا</li>
            </ol>
            @if(!empty($services))
            <ul class="list-unstyled no-margin clearfix">
                @foreach($services as $service)
                <li class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-box inner">
                        <figure>
                            <div class="fig-img">
                                <a href="{{url('service/'.$service->slug)}}"><img src="{{url($service->image)}}" class="img-responsive align-center"
                                                alt="{{$service->title}}"></a>
                            </div>
                            <figcaption>
                                <h4><a href="{{url('service/'.$service->slug)}}">{{$service->title}}</a></h4>
                                <span><i class="fa fa-clock-o"></i>{{$service->human_date}}</span>
                                <p>{{$service->content}}</p>
                            </figcaption>
                        </figure>
                    </div>
                </li>
                    @endforeach
            </ul>
            <div class="text-center">
                {!! $services->render()!!}
            </div>
                @endif


@stop