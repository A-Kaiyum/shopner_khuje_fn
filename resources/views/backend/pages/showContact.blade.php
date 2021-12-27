@extends('backend.layouts.master')
@section('title','contact')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create post</h3>
                    <a href="{{route('contact.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width:200px">Name</th>
                        <td>{{$contact->name}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Email</th>
                        <td>{{$contact->email}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Phone</th>
                        <td>{{$contact->phone}}</td>
                    </tr>
                    <tr>
                        <th style="width:200px">Message</th>
                        <td>{!! $contact->message !!}</td>
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


