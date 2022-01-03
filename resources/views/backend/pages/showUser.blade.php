@extends('backend.layouts.master')
@section('title','User')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create user</h3>
                    <a href="{{route('user.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width:200px">Image</th>
                            <td>
                                <div style="width:300px; height:300px;overflow: hidden; margin:auto">
                                    <img src="{{asset($user->image)}}" class="img-fluid" alt="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th style="width:200px">User Title</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th style="width:200px">Email</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th style="width:200px">User Description</th>
                            <td>{!! $user->description !!}</td>
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

