@extends('admin/layouts/main')

@section('content')
        <!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           الشرائح
            <small>شريحه جديده</small>
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
                        <h3 class="box-title">اضافه شريحه </h3>

                    </div>
                    <!-- form start here -->
                    {!! Form::model($model,[
                                                    'action'=>'SlideController@store',
                                                    'id'=>'myForm',
                                                    'role'=>'form',
                                                    'files'=>'true',
                                                    'method'=>'POST'
                                                    ])!!}


                    <div class="box-body">

                        @include('admin.slides.form')
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