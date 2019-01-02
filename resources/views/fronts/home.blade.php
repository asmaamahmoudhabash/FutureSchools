@extends('fronts.layouts.main')

@section('content')
    @inject('settings','App\Models\Setting')

    <?php
    $setting = $settings->find(1);
    ?>
<?php //print_r($setting);die(); ?>
    <div class="main-slider">
        <div class="owl-carousel">
            @foreach($slides as $slide)
<!--            --><?php //print_r($slide);die(); ?>
                {{--<div class="item">--}}
                    <a href=""><img src="{{asset($slide->image)}}" class="img-responsive" alt=""></a>
                    <div class="caption">
                        <h1>{{$slide->title}}</h1>
                        <p>{{$slide->content}}</p>
                    </div>
                {{--</div>--}}
            @endforeach
        </div>
    </div>


    <section class="welcome">
        <div class="container">

                <div class="section-title">


                    <h3> {{$setting->welcome_title}}</h3>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                            <div class="section-desc">
                                <p>   {{$setting->welcome_content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($pages as $page)

<!--                    --><?php //print_r($page) ;die();?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="feature-box">
                                <figure>
                                    <div class="fig-img">
                                        <a href=""><img src="{{$page->image}}" class="img-responsive align-center"
                                                        alt=""></a>
                                    </div>
                                    <figcaption>
                                        <h4>{{$page->title}}</h4>
                                        <p>{{$page->content}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-title">
                <h3>خدماتنا</h3>
            </div>
            <ul class="list-unstyled no-margin clearfix">

                @foreach($services as $service)
                    <li class="col-md-4 col-sm-4 col-xs-12">
                        <div class="service-item">
                            <figure>
                                <img src="{{url($service->image)}}" class="img-responsive align-center" alt="">
                                <figcaption>
                                    <div class="content">
                                        <h4>{{$service->title}}</h4>
                                        <p>{{$service->content}}</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <div class="container">
        <div class="section-title">
            <h3>جديد الاخبار</h3>
        </div>
        <ul class="list-unstyled no-margin clearfix">

            @foreach($news as $new)
                <li class="col-md-6 col-sm-6 col-xs-12">
                    <div class="news-item">
                        <div class="media">
                            <div class="media-left">
                                <a href="{{url('post/'.$new->slug)}}"><img src="{{url($new->image)}}" alt="" class="media-object"></a>
                            </div>
                            <div class="media-body">
                                <h4><a href="{{url('post/'.$new->slug)}}">{{$new->title}}</a></h4>
                                <span><i class="fa fa-clock-o"></i>{{date("F j,Y ,g:i a",strtotime($new->created_at))}} </span>
                                <p>{{$new->content}}</p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>


    <section class="home-media">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="video">
                        <h3>الفيديو</h3>

                        <iframe src="https://www.youtube.com/embed/{{$setting->video}}" frameborder="0"
                                allowfullscreen></iframe>
                    </div>

                </div>


                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="home-album">
                        <h3>ألبوم الصور</h3>
                        @foreach($albums as $album)
                            <ul class="list-unstyled no-margin clearfix">
                                <li class="col-md-6 col-sm-6 col-xs-6 col-padding-5">
                                    <a href="{{url($album->image)}}" rel="prettyPhoto"><img src="{{url($album->image)}}"
                                                                                            class="img-responsive"
                                                                                            alt=""></a>
                                </li>
                                @endforeach
                            </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <div class="section-title">
                <h3>شركاء النجاح</h3>
            </div>

            <div class="owl-carousel">
                @foreach($partners as $partner)
                    <div class="item">
                        <img src="{{url($partner->image)}}" class="img-responsive" alt="">
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=nasr+city&key=AIzaSyCDVK91hEhLXwxyXT6dR8rwf_7gxNRyBhs"
                frameborder="0" allowfullscreen></iframe>
    </div>



@stop
