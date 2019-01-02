@extends('fronts.layouts.main')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
        <li>عملاؤنا</li>
    </ol>
    @if(!empty($clients))
        <ul class="list-unstyled no-margin clearfix">
            @foreach($clients as $client)
                <li class="col-md-4 col-sm-4 col-xs-12 col-padding-10">
                    <div class="client-item">
                        <div class="well">
                            <img src="{{url($client->image)}}" class="img-responsive align-center" alt="{{$client->title}}">
                        </div>
                        <h4>{{$client->title}}</h4>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="text-center">
            {!! $clients->render() !!}
        </div>
        @endif

@stop