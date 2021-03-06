<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>مدارس المستقبل |تسجيل دخول</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>مدارس المستقبل</b></a>
    </div><!-- /.login-logo -->


    <div class="row">
        <div class="col-md-12">
            <div class="login-box-body">
                <p class="login-box-msg">تسجيل دخول</p>


                {{Form::open(array(
                 'url'=>'login',
                 'class'=>'form-horizontal',
                 'role'=>'form',
                 'method' => 'POST'
                 ))}}



                <div class="form-group has-feedback col-md-12  ">
                    <input type="text" name="email" class="form-control" placeholder="البريد الالكتروني ">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>



                <div class="form-group has-feedback col-md-12 ">
                    <input type="password" name="password" class="form-control" placeholder="الرقم السري">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>





                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat ">ارسال</button>
                    </div><!-- /.col -->
                </div>

                {{ Form::close() }}





            </div><!-- /.login-box-body -->
        </div>
    </div>



</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('assets/admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>

<!-- Bootstrap 3.3.5 -->
<script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('assets/admin/plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
