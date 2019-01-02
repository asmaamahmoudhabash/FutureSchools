@extends('resources.views.fronts.layouts.main')

@section('content')




    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
        <li>معرض الصور</li>
    </ol>
    <ul class="list-unstyled no-margin clearfix">
        @foreach($albums as $album)
        <li class="col-md-4 col-sm-4 col-xs-12">
            <div class="video-item">
                <figure>
                    <a href=""><img src="{{url($album->image)}}" class="img-responsive align-center" alt=""></a>
                    <label for=""><i class="fa fa-image"></i>20 صورة</label>
                    <figcaption>
                        <h4><a href="">{{$album->title}}</a></h4>
                        <span><i class="fa fa-clock-o"></i>20{{date("F j,Y ,g:i a",strtotime($album->created_at))}} </span>
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
