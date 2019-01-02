@extends('fronts.layouts.main')

@section('content')

    <main class="main-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home"></i></a></li>
                <li>نتائج البحث</li>
            </ol>
            @if(!empty($news))
            <ul class="list-unstyled no-margin clearfix">
                @foreach($news as $new)
                <li class="col-md-6 col-sm-6 col-xs-12">
                    <div class="news-item">
                        <div class="media">
                            <div class="media-left">
                                <a href=""><img src="{{url($new->image)}}" alt="" class="media-object"></a>
                            </div>
                            <div class="media-body">
                                <h4><a href="">{{$new->title}}</a></h4>
                                <span><i class="fa fa-clock-o"></i>{{date("F j,Y ,g:i a",strtotime($new->created_at))}} </span>
                                <p>{{$new->content}}</p>
                            </div>
                        </div>
                    </div>
                </li>
                    @endforeach

            </ul>

            <div class="text-center">
                {!! $news->render() !!}
            </div>
                @endif
        </div>
    </main>
@stop