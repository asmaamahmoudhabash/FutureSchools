@extends('fronts.layouts.main')

@section('content')

    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
    <li>اتصل بنا</li>
</ol>
<div class="contact-us">
    <div class="title">
        @foreach($settings as $setting)
            <p><span></span>العنوان   : {{$setting->address}}</p>
            <p><span></span>الهاتف   : {{$setting->phone}}</p>
            <p><span></span>فاكس : {{$setting->fax}}</p>
            <p><span></span>البريد الإلكتروني : {{$setting->email}}</p>
            @endforeach
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>يسعدنا تلقى رسائلكم والاجابة عليها </h3>
            {!! Form::open(array(
                       'url'=>'contactus',

                       'role'=>'form',
                       'method'=>'POST',
                       'files'=>true
                       ))!!}

            <div class="clearfix">
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input name="name" type="text" class="form-control" placeholder="الاسم">
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input name="email" type="text" class="form-control" placeholder="الايميل">
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input name="mobile" type="text" class="form-control" placeholder="الجوال">
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input name="subject" type="text" class="form-control" placeholder="موضوع الاتصال">
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <textarea name="body" class="form-control" placeholder="نص الرسالة"></textarea>
                </div>
            </div>
            <div class="send">
                <button class="btn">ارسال</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed/v1/place?q=nasr+city&key=AIzaSyCDVK91hEhLXwxyXT6dR8rwf_7gxNRyBhs"
            frameborder="0" allowfullscreen></iframe>
</div>
@stop