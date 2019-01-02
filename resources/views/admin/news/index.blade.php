@extends('admin/layouts/main')

@section('content')


        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


        <h1>
              الاخبار
            <small>عرض الاخبار</small>
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


                        <a href="{{url('admin/news/create')}}" class="btn btn-primary pull-right">خبر جديد</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان الخبر</th>
                                <th>المحتوي </th>
                                <th>صوره الخبر </th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($news as $new)
                                <tr>
                                    <td>{{$new->id}}</td>
                                    <td>{{$new->title}}</td>
                                    <td>{{$new->content}}</td>
                                    <td>
                                        <img src="{{url($new->image)}}"width="50px"
                                             class="img-rounded  img-responsive " alt="">
                                    </td>


                                    <td><a href="{{url('admin/news/'.$new->id.'/edit')}}" class="btn btn-xs btn-success"><i
                                                    class="fa fa-edit"></i></a></td>
                                    <td>
                                        {{Form::open(array('method'=>'delete','url'=>'admin/news/'.$new->id))}}
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
                                <th>عنوان الخبر</th>
                                <th>المحتوي </th>
                                <th>صوره الخبر </th>
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