@extends('backend.layouts.master')
@section('title','Category')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Category List</h3>
                                <a href="{{route('category.create')}}" class="btn btn-primary"> Create Category</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#Sl</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Post Count</th>
                                    <th style="width: 40px">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if($categories->count()>0)
                                <?php $sl = 1; ?>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>{{$category->id}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('category.edit',[$category->id])}}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i></a>
                                            <form action="{{route('category.destroy',[$category->id])}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('category.show',[$category->id])}}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <?php $sl++; ?>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">
                                        <h5 class="text-center">No Category Found</h5>
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
