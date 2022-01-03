@extends('backend.layouts.master')
@section('title','Find Donner')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">findBlood</h3>
                            <a href="#" class="btn btn-primary"> Go Back</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>Message</th>
                                <th style="width: 40px">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($findBloods->count()>0)
                                <?php $sl = 1; ?>
                                @foreach($findBloods as $findBlood)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>{{$findBlood->name}}</td>
                                        <td>{{$findBlood->email}}</td>
                                        <td>{{$findBlood->address}}</td>
                                        <td>{{$findBlood->phone}}</td>
                                        <td>{{$findBlood->bloodgroup}}</td>
                                        <td>{!! \Illuminate\Support\Str::limit($findBlood->message,20) !!}</td>
                                        <td class="d-flex">

                                            <form action="{{route('findBlood.destroy',[$findBlood->id])}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('findBlood.show',[$findBlood->id])}}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <?php $sl++; ?>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No findBlood Found</h5>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>


@endsection


