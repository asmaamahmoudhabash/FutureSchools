@extends('resources.views.fronts.layouts.main')

@section('content')


    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
        <li>خدماتنا</li>
    </ol>
    @foreach($services as $service)
    <ul class="list-unstyled no-margin clearfix">
        <li class="col-md-4 col-sm-4 col-xs-12">
            <div class="feature-box inner">
                <figure>
                    <div class="fig-img">
                        <a href=""><img src="{{url($service->image)}}" class="img-responsive align-center" alt=""></a>
                    </div>
                    <figcaption>
                        <h4><a href="">{{$service->title}}</a></h4>
                        <span><i class="fa fa-clock-o"></i>{{date("F j,Y ,g:i a",strtotime($service->created_at))}}</span>
                        <p>{{$service->content}} </p>
                    </figcaption>
                </figure>
            </div>
        </li>
     @endforeach

    </ul>
    <div class="text-center">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="">الصفحة الاخيرة<i class="fa fa-angle-double-left"></i></a></li>
            </ul>
        </nav>
    </div>

@stop
