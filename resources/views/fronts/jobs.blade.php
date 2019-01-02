@extends('fronts.layouts.main')

@section('content')

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home"></i></a></li>
                <li>الوظائف</li>
            </ol>
            <div class="contact-us">
                <div class="title">

                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">


                        {!! Form::open(array(
                            'url'=>'jobs',

                            'role'=>'form',
                            'method'=>'POST',
                            'files'=>'true'
                            ))!!}

                        <div class="clearfix">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">الاسم</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">النوع</label>
                                <input name="gender" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">البريد الاليكتروني</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">الجوال</label>
                                <input name="mobile" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">الدولة</label>
                                <input name="country" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">المدينة</label>
                                <input name="city" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">مستوى التعليم</label>
                                <input name="learn" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">سنة التخرج</label>
                                <input name="graduation" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">التقدير العام</label>
                                <input name="degree" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label for="">اسم الجامعة</label>
                                <input name="university" type="text" class="form-control">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label for="">الخبرات العملية</label>
                                <textarea name="experience" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-7 col-sm-7 col-xs-12">
                                <label for="exampleInputFile">ارفاق ملف</label>
                                <input name="file" type="file" id="exampleInputFile" class="form-control">

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