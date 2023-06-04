@extends('layouts.adminwindow')

@section('title', 'Show Message :'.$data->title)

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Message </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 200px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        </tr>
                        <tr>
                            <th>Name & Surname</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$data->message}}</td>
                        </tr>
                        <tr>
                            <th>Ip Number</th>
                            <td>{{$data->ip}}</td>
                        </tr>


                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>

                        <tr>
                            <th>Admin Note</th>
                            <td>
                                <form role="form" action="{{route('admin.message.update', ['id'=>$data->id])}}" method="post">
                                    @csrf
                                      <textarea cols="100"  id='note' name="note">{{$data->note}}</textarea>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Note</button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
