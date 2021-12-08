@extends('backend.layouts.master')
@section('title','Message')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create post</h3>
                    <a href="{{route('message.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width:200px">Name</th>
                        <td>{{$message->name}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Email</th>
                        <td>{{$message->email}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Phone</th>
                        <td>{{$message->phone}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Message</th>
                        <td>{!! $message->message !!}</td>
                    </tr>

                    </tbody>


                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>

    </div>

@endsection


