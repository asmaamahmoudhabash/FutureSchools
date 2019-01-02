@include('flash::message')
@include('admin.partials.validation-errors')
<div class="box-body">
    <label for="">بيانات التواصل الاجتماعي </label>
    <div class="form-group " id="facebook">
        <label for="facebook">فيس بوك</label>
        <div class="">
            {{Form::text('facebook',null,[
            'class'=>'form-control',
            'id'=>'facebook',

            ])}}
        </div>
    </div>

    <div class="form-group " id="twitter">
        <label for="twitter">تويتر</label>
        <div class="">
            {{Form::text('twitter',null,[
            'class'=>'form-control',
            'id'=>'twitter',

            ])}}
        </div>
    </div>
    <div class="form-group " id="youtube">
        <label for="youtube">يوتيوب</label>
        <div class="">
            {{Form::text('youtube',null,[
            'class'=>'form-control',
            'id'=>'youtube',

            ])}}
        </div>
    </div>
    <div class="form-group " id="google_plus">
        <label for="google_plus">جوجل بلاس</label>
        <div class="">
            {{Form::text('google_plus',null,[
            'class'=>'form-control',
            'id'=>'google_plus',

            ])}}
        </div>
    </div>
    <div class="form-group " id="instgram">
        <label for="instgram">انستجرام</label>
        <div class="">
            {{Form::text('instgram',null,[
            'class'=>'form-control',
            'id'=>'instgram',

            ])}}
        </div>
    </div>

    <hr>


    <label for="">بينانات الاتصال</label>
    <div class="form-group" id="address">
        <label for="">العنوان</label>
        <div class="">
            {{ Form::text("address", null , [
            "class" => "form-control",
            "id" =>"address"
            ]) }}
        </div>
    </div>

    <div class="form-group" id="email_wrap">
        <label for="email">البريد الاكتروني </label>
        <div class="">
            {{ Form::email("email", null , [
            "class" => "form-control",
            "id" =>"email"
            ]) }}
        </div>
    </div>

    <div class="form-group " id="phone">
        <label for="phone">الهاتف</label>
        <div class="">
            {{Form::text('phone',null,[
            'class'=>'form-control',
            'id'=>'phone',

            ])}}
        </div>
    </div>
    <div class="form-group " id="fax">
        <label for="fax">فاكس</label>
        <div class="">
            {{Form::text('fax',null,[
            'class'=>'form-control',
            'id'=>'fax',

            ])}}
        </div>
    </div>

    <div class="form-group " id="latitude">
        <label for="latitude">دائره العرض</label>
        <div class="">
            {{Form::text('latitude',null,[
            'class'=>'form-control',
            'id'=>'latitude',

            ])}}
        </div>
    </div>

    <div class="form-group " id="longitude">
        <label for="longitude">خط الطول</label>
        <div class="">
            {{Form::text('longitude',null,[
            'class'=>'form-control',
            'id'=>'longitude',

            ])}}
        </div>
    </div>
    <div class="form-group " id="welcome_title">
        <label for="welcome_title">العنوان الترحيبي </label>
        <div class="">
            {{Form::text('welcome_title',null,[
            'class'=>'form-control',
            'id'=>'welcome_title',

            ])}}
        </div>
    </div>
    <div class="form-group" id="welcome_content_wrap">
        <label for="">الكلمه الترحبيه</label>
        <div class="">
            {{ Form::textarea("welcome_content", null , [
            "class" => "form-control",
            "id" =>"welcome_content"
            ]) }}
        </div>
    </div>

    <hr>
    <div class="form-group " id="video">
        <label for="">الفيديو - معرف الفيديو video_id </label>
        <div class="">
            {{Form::text('video',null,[
            'class'=>'form-control',
            'id'=>'video',


            ])}}
        </div>
    </div>
    <small class="text-muted">https://www.youtube.com/watch?v=<code>6TaZxUoSXWQ</code></small>
    <hr>



    <label for="">اعدادات السايو </label>
    <div class="form-group " id="website_name">
        <label for="">اسم الموقع </label>
        <div class="">
            {{Form::text('website_name',null,[
            'class'=>'form-control',
            'id'=>'website_name',
            'class'=>'form-control',



            ])}}
        </div>
    </div>


    <div class="form-group " id="keywords">
        <label for="">الكلمات الدلاليه</label>
        <div class="">
            {{Form::text('keywords',null,[
            'class'=>'form-control',
            'id'=>'website_name',
            'class'=>'form-control',



            ])}}
        </div>
    </div>
