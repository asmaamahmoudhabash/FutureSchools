@extends('admin/layouts/main')

@section('content')


        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Your Page Content Here -->

        <div class="row">

            <div class="col-lg-12">
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

            </div>
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-12">
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

            </div>
            </div>

        <div class="row">

        <div class="col-lg-12">


                <div class="box">
                    <div class="box-header">
                        <!-- flash message package -->
                        @include('flash::message')


                        <a href="{{url('admin/client/create')}}" class="btn btn-primary pull-right">عميل جديد</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>معلومات العميل</th>
                                <th>صوره العميل</th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->information}}</td>
                                    <td>
                                        <img src="{{url($client->image)}}"width="50px"
                                             class="img-rounded  img-responsive " alt="">
                                    </td>



                                    <td><a href="{{url('admin/client/'.$client->id.'/edit')}}" class="btn btn-xs btn-success"><i
                                                    class="fa fa-edit"></i></a></td>
                                    <td>
                                        {{Form::open(array('method'=>'delete','url'=>'admin/client/'.$client->id))}}
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
                                <th>الاسم</th>
                                <th>معلومات العميل</th>
                                <th>صوره العميل</th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->


            </div><!-- /.col -->
        </div><!--end row-->


        <div class="row">

            <div class="col-lg-12">

                <div class="box">
                    <div class="box-header">
                        <!-- flash message package -->
                        @include('flash::message')


                        <a href="{{url('admin/partner/create')}}" class="btn btn-primary pull-right">شريك جديد</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>معلومات الشريك</th>
                                <th>صوره الشريك</th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($partners as $partner)
                                <tr>
                                    <td>{{$partner->id}}</td>
                                    <td>{{$partner->name}}</td>
                                    <td>{{$partner->information}}</td>
                                    <td>
                                        <img src="{{url($partner->image)}}"width="50px"
                                             class="img-rounded  img-responsive " alt="">
                                    </td>



                                    <td><a href="{{url('admin/partner/'.$partner->id.'/edit')}}" class="btn btn-xs btn-success"><i
                                                    class="fa fa-edit"></i></a></td>
                                    <td>
                                        {{Form::open(array('method'=>'delete','url'=>'admin/partner/'.$partner->id))}}
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
                                <th>الاسم</th>
                                <th>معلومات الشريك</th>
                                <th>صوره الشريك</th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->


            </div><!-- /.col -->
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-12">

                <div class="box">
                    <div class="box-header">
                        <!-- flash message package -->
                        @include('flash::message')


                        <a href="{{url('admin/service/create')}}" class="btn btn-primary pull-right">خدمه جديده</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان الخدمه </th>
                                <th>المحتوي </th>
                                <th>صوره الخدمه </th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->content}}</td>
                                    <td>
                                        <img src="{{url($service->image)}}"width="50px"
                                             class="img-rounded  img-responsive " alt="">
                                    </td>


                                    <td><a href="{{url('admin/service/'.$service->id.'/edit')}}" class="btn btn-xs btn-success"><i
                                                    class="fa fa-edit"></i></a></td>
                                    <td>
                                        {{Form::open(array('method'=>'delete','url'=>'admin/service/'.$service->id))}}
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
                                <th>عنوان الخدمه </th>
                                <th>المحتوي </th>
                                <th>صوره الخدمه </th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">


                <div class="box">
                    <div class="box-header">
                        <!-- flash message package -->
                        @include('flash::message')


                        <a href="{{url('admin/album/create')}}" class="btn btn-primary pull-right">البوم صور جديد</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان الالبوم</th>
                                <th>محتوي الالبوم</th>
                                <th>صوره الالبوم</th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($albums as $album)
                                <tr>
                                    <td>{{$album->id}}</td>
                                    <td>{{$album->title}}</td>
                                    <td>{{$album->content}}</td>

                                    <td>
                                        <img src="{{url($album->image)}}"width="50px"
                                             class="img-rounded  img-responsive " alt="">
                                    </td>



                                    <td><a href="{{url('admin/album/'.$album->id.'/edit')}}" class="btn btn-xs btn-success"><i
                                                    class="fa fa-edit"></i></a></td>
                                    <td>
                                        {{Form::open(array('method'=>'delete','url'=>'admin/album/'.$album->id))}}
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
                                <th>عنوان الالبوم</th>
                                <th>محتوي الالبوم</th>
                                <th>صوره الالبوم</th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->


            </div><!-- /.col -->
        </div><!-- /.row -->

    </section>
</div>
@endsection