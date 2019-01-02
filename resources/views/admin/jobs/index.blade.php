@extends('admin/layouts/main')

@section('content')


        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


        <h1>
            اتصل بنا
            <small>عرض االرسائل</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <!-- flash message package -->
                        @include('flash::message')
                    </div>

                    <div class="box-body">



                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th>اسم الراسل</th>
                                <th>الايميل</th>
                                <th >حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->id}}</td>
                                    <td>{{$job->name}}</td>
                                    <td>{{$job->email}}</td>


                                    <td>
                                        {{Form::open(array('method'=>'delete','url'=>'admin/job/'.$job->id))}}
                                        <button type="submit" class="destroy btn btn-danger btn-xs"><i
                                                    class="fa fa-trash-o"></i></button>
                                        {{Form::close()}}
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>

                                <th>اسم الراسل</th>
                                <th>الايميل</th>
                                <th>حذف</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->


            </div><!-- /.col -->
        </div><!-- /.row -->


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@stop