<!doctype html>
@inject('settings','App\Models\Setting')

<?php
$setting = $settings->find(1);
?>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$setting->website_name}}</title>
    <meta name="description" content="{{$setting->website_description}}">
    <meta name="keywords" content="{{$settings->keywords}}">

    <!--=====Icon-Font======-->
    <link rel="stylesheet" href="{{asset('assets/front/assets/css/font-awesome.min.css')}}">

    <!--======Bootstrap======-->
    <link rel="stylesheet" href="{{asset('assets/front/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/front/assets/plugins/owl.carousel/owl.carousel.css')}}">
    <!--=====Styles=====-->
    <link rel="stylesheet" href="{{asset('assets/front/assets/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
        <script src="../assets/js/html5shiv-3.7.1.js"></script>
        <script src="../assets/js/respond-1.4.2.js"></script>
    <![5endif] -->

</head>

<body class="rtl">



<section id="wrapper">
    <header class="main-header"><!--===== Start Header =====-->
        <div class="top-header">
            <div class="container">
                <div class="social-info">
                    <label for="">{{$setting->phone}}<i class="fa fa-phone"></i></label>
                    <label for="">{{$setting->email}}<i class="fa fa-envelope"></i></label>
                    <a target="_blank" href="{{$setting->instgram}}"><img src="{{asset('assets/front/assets/images/social-icon-2.png')}}" alt=""></a>
                    <a target="_blank" href="{{$setting->google_plus}}"><img src="{{asset('assets/front/assets/images/social-icon-1.png')}}" alt=""></a>
                    <a target="_blank" href="{{$setting->youtube}}"><img src="{{asset('assets/front/assets/images/social-icon-3.png')}}" alt=""></a>
                    <a target="_blank" href="{{$setting->twitter}}"><img src="{{asset('assets/front/assets/images/social-icon-4.png')}}" alt=""></a>
                    <a target="_blank" href="{{$setting->facebook}}"><img src="{{asset('assets/front/assets/images/social-icon-5.png')}}" alt=""></a>
                </div>
                <div class="logo">
                    <a href="{{url('/')}}" class="navbar-brand">
                        <img src="{{asset('assets/front/assets/images/logo.png')}}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="search">

                    {!! Form::open(array(
                               'url'=>'search',
                               'id'=>'myForm',
                               'role'=>'form',
                               'method'=>'GET',
                               'files'=>true
                               ))!!}
                    <div class="form-group">
                        <input type="text"  name="keyword" class="form-control" placeholder="">
                        <button class="btn"><i class="fa fa-search"></i></button>

                    </div>
                    {!! Form::close()!!}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <nav class="navbar navbar-default no-radius no-margin no-border main-nav" role="navigation"><!--====== Start Nav =======-->
            <div class="container">
                <div class="navbar-header"><!--====== Start Navbar Header =======-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!--====== End Navbar Header =======-->
                <div class="collapse navbar-collapse navbar-ex1-collapse"><!--=== Start navbar-collapse ===-->
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}" class="active"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{url('page/5')}}">من نحن</a></li>
                        <li><a href="{{url('/services')}}">خدماتنا</a></li>
                        <li><a href="{{url('/news')}}">اخبارنا</a></li>
                        <li><a href="{{url('/client')}}">عملاؤنا</a></li>
                        <li><a href="{{url('/albums')}}">معرض الصور</a></li>
                        <li><a href="{{url('jobs')}}">الوظائف</a></li>
                        <li><a href="{{url('/contact_us')}}">اتصل بنا</a></li>


                    </ul>
                </div><!--=== End navbar-collapse ===-->
            </div>
        </nav><!--====== End Nav =======-->
    </header><!--===== End Header =====-->
    <main class="main-content">
        <div class="container">
