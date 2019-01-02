@extends('front.layouts.main')

@section('content')
    <main class="main-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home"></i></a></li>
                <li>اتصل بنا</li>
            </ol>
            <div class="contact-us">
                <div class="title">
                    <p><span></span> {{settings()->address}}</p>
                    <p><span></span>الهاتف : {{settings()->phone}}</p>
                    <p><span></span>فاكس :{{settings()->fax}}</p>
                    <p><span></span>البريد الإلكتروني : {{settings()->email}}</p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927764.356387415!2d47.383030815711265!3d24.7241502119005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1476184404460"
                        frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </main>
@stop