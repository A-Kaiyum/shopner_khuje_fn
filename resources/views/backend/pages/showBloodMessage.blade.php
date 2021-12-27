@extends('backend.layouts.master')
@section('title','findBlood')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create post</h3>
                    <a href="{{route('findBlood.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width:200px">Name</th>
                        <td>{{$findBlood->name}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Email</th>
                        <td>{{$findBlood->email}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Phone</th>
                        <td>{{$findBlood->phone}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Blood Group</th>
                        <td>{{$findBlood->bloodgroup}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Message</th>
                        <td>{!! $findBlood->message !!}</td>
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



