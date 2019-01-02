@extends('admin/layouts/main')

@section('content')


        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


        <h1>
الشرائح
            <small>عرض الشرائح</small>
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


                        <a href="{{url('admin/slide/create')}}" class="btn btn-primary pull-right">شريحه جديده</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان الشريحه</th>
                                <th>المحتوي </th>
                                <th>صوره الشريحه </th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($slides as $slide)
                                <tr>
                                    <td>{{$slide->id}}</td>
                                    <td>{{$slide->title}}</td>
                                    <td>{{$slide->content}}</td>
                                    <td>
                                        <img src="{{url($slide->image)}}"width="50px"
                                             class="img-rounded  img-responsive " alt="">
                                    </td>


                                    <td><a href="{{url('admin/slide/'.$slide->id.'/edit')}}" class="btn btn-xs btn-success"><i
                                                    class="fa fa-edit"></i></a></td>
                                    <td>
                                        {{Form::open(array('method'=>'delete','url'=>'admin/slide/'.$slide->id))}}
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
                                <th>عنوان الشريحه</th>
                                <th>المحتوي </th>
                                <th>صوره الشريحه </th>
                                <th>التعديل</th>
                                <th>الحذف</th>
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