@include('flash::message')
@include('admin.partials.validation-errors')
<div class="box-body">
    <div class="form-group " id="title">
        <label for="title">عنوان الالبوم</label>
        <div class="">
            {{Form::text('title',null,[
            'class'=>'form-control',
            'id'=>'title',

            ])}}
        </div>
    </div>


    <div class="form-group" id="content_wrap">
        <label for="">المحتوي</label>
        <div class="">
            {{ Form::textarea("content", null , [
            "class" => "form-control",
            "id" =>"content"
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
            <label for="">صوره الالبوم </label>
            <div class="">
                {{Form::file('image',[
                 'class'=>'form-control fileinput',
                 'id'=>'image',




                 ])}}
            </div>


