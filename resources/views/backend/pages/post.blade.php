@extends('backend.layouts.master')
@section('title','Post')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Post List</h3>
                            <a href="{{route('post.create')}}" class="btn btn-primary"> Create post</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#Sl</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th style="width: 40px">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($posts->count()>0)
                                <?php $sl = 1; ?>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>
                                            <div style="width:50px; height:50px;overflow: hidden">
                                                <img src="{{asset($post->image)}}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->category->name}}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('post.edit',[$post->id])}}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i></a>
                                            <form action="{{route('post.destroy',[$post->id])}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('post.show',[$post->id])}}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <?php $sl++; ?>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No Post Found</h5>
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
