@include('flash::message')
@include('admin.partials.validation-errors')
<div class="box-body">
    <div class="form-group " id="name">
        <label for="name">اسم المستخدم</label>
        <div class="">
            {{Form::text('name',null,[
            'class'=>'form-control',
            'id'=>'name',

            ])}}
        </div>
    </div>


    <div class="form-group" id="email_wrap">
        <label for="email">الايميل </label>
        <div class="">
            {{ Form::email("email", null , [
            "class" => "form-control",
            "id" =>"email"
            ]) }}
        </div>
    </div>

    <div class="form-group" id="password_wrap">
        <label for="password">الرقم السري </label>
        <div class="">
            {{ Form::password("password" , [
            "class" => "form-control",
            "id" =>"password"
            ]) }}
        </div>
    </div>


    <div class="form-group" id="password_confirmation_wrap">
        <label for="password_confirmation">تاكيد الرقم السري</label>
        <div class="">
            {{ Form::password("password_confirmation", [
            "class" => "form-control",
            "id" =>"password_confirmation"
            ]) }}
        </div>
    </div>


