@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home"></i></a></li>
                <li>الاخبار</li>
            </ol>
            @if(!empty($posts))
            <ul class="list-unstyled no-margin clearfix">
                @foreach($posts as $post)
                <li class="col-md-6 col-sm-6 col-xs-12">
                    <div class="news-item">
                        <div class="media">
                            <div class="media-left">
                                <a href="{{url('post/'.$post->slug)}}"><img src="{{$post->image}}" alt="{{$post->title}}" class="media-object"></a>
                            </div>
                            <div class="media-body">
                                <h4><a href="">{{$post->title}}</a></h4>
                                <span><i class="fa fa-clock-o"></i>{{$post->human_date}}</span>
                                <p>{{$post->content}}</p>
                            </div>
                        </div>
                    </div>
                </li>
                    @endforeach

            </ul>

            <div class="text-center">
                {!! $posts->render() !!}
            </div>
                @endif

@stop