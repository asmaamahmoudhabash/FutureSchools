@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li>معرض الصور</li>
            </ol>
            @if(!empty($albums))
            <ul class="list-unstyled no-margin clearfix">
                @foreach($albums as $album)
                <li class="col-md-4 col-sm-4 col-xs-12">
                    <div class="video-item">
                        <figure>
                            <a href="{{url('album/'.$album->slug)}}"><img src="{{url($album->image)}}" class="img-responsive align-center"
                                            alt="{{$album->title}}"></a>
                            <label for=""><i class="fa fa-image"></i>{{count($album->photos)}} صورة</label>
                            <figcaption>
                                <h4><a href="{{url('album/'.$album->slug)}}">{{$album->title}}</a></h4>
                                <span><i class="fa fa-clock-o"></i>{{$album->human_date}} </span>
                            </figcaption>
                        </figure>
                    </div>
                </li>
                @endforeach
            </ul>
            @endif
            <div class="text-center">
                {!! $albums->render() !!}

            </div>

@stop