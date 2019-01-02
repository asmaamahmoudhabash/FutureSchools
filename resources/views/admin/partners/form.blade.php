@include('flash::message')
@include('admin.partials.validation-errors')
<div class="box-body">
    <div class="form-group " id="name">
        <label for="name">اسم الشريك</label>
        <div class="">
            {{Form::text('name',null,[
            'class'=>'form-control',
            'id'=>'name',

            ])}}
        </div>
    </div>


    <div class="form-group" id="information_wrap">
        <label for="">معلومات الشريك </label>
        <div class="">
            {{ Form::textarea("information", null , [
            "class" => "form-control",
            "id" =>"information"
            ]) }}
        </div>
    </div>
    <div class="form-group " id="published_at_wrap">
        <label for="">تاريخ النشر </label>
        <div class="">
            {{Form::text('published_at',null,[
            'class'=>'form-control datepicker',
            'id'=>'published_at',
           'style'=>'width:200px',

            ])}}
        </div>
    </div>
        <div class="form-group " id="image_wrap">
            <label for="">صوره الشريك </label>
            <div class="">

                {{Form::file('image',[
                'class'=>'form-control fileinput',
                'id'=>'image',




                ])}}
            </div>
