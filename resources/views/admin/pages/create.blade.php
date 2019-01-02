@extends('admin/layouts/main')

@section('content')
        <!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          الصفحات
            <small>صفحه جديده</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="row">
            <!-- right column -->
            <div class="col-md-12">
                <!-- Default box -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">صفحه جديده </h3>

                    </div>
                    <!-- form start here -->
                    {!! Form::model($model,[
                                                    'action'=>'PageController@store',
                                                    'id'=>'myForm',
                                                    'role'=>'form',
                                                    'method'=>'POST',
                                                     'files'=>'true',

                                                    ])!!}


                    <div class="box-body">

                        @include('admin.pages.form')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                    <!-- /.box-footer-->
                    {!! Form::close()!!}
                </div>
                <!-- /.box -->
            </div><!--end col -->
        </div><!--end row-->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection