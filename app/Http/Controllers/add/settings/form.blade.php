@include('admin.layouts.partials.validation-errors')
@include('flash::message')

<hr>
<h4>بيانات التواصل الاجتماعي</h4>
{!! \App\Ibnfarouk\MyClasses\Field::text('facebook' , 'فيس بوك') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('twitter','تويتر') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('youtube' , 'يوتيوب') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('google_plus','جوجل بلاس') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('instagram' , 'انستقرام') !!}
<hr>
<h4>بيانات الاتصال</h4>
{!! \App\Ibnfarouk\MyClasses\Field::textarea('address','العنوان') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('email' , 'البريد الالكتروني') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('phone','الهاتف') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('fax' , 'فاكس') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('latitude','دائرة العرض') !!}
{!! \App\Ibnfarouk\MyClasses\Field::text('longitude','خط الطول') !!}

<hr>
{!! \App\Ibnfarouk\MyClasses\Field::text('welcome_title','العنوان الترحيبي') !!}
{!! \App\Ibnfarouk\MyClasses\Field::textarea('welcome_content','الكلمة الترحيبية') !!}

<hr>
{!! \App\Ibnfarouk\MyClasses\Field::text('video','الفيديو - معرف الفيديو video_id') !!}
<small class="text-muted">https://www.youtube.com/watch?v=<code>6TaZxUoSXWQ</code></small>

<hr>

<h4>اعدادات السيو</h4>
{!! \App\Ibnfarouk\MyClasses\Field::text('website_name' , 'اسم الموقع') !!}
{!! \App\Ibnfarouk\MyClasses\Field::textarea('website_description','وصف الموقع') !!}
{!! \App\Ibnfarouk\MyClasses\Field::tagsInput('keywords','الكلمات الدلالية') !!}