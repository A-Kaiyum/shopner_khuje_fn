@extends('backend.layouts.master')
@section('title','Tag')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Tag List</h3>
                            <a href="{{route('tag.create')}}" class="btn btn-primary"> Create Tag</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#Sl</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($tags->count()>0)
                            <?php $sl = 1; ?>

                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$sl}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->slug}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('tag.edit',[$tag->id])}}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i></a>
                                        <form action="{{route('tag.destroy',[$tag->id])}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="{{route('tag.show',[$tag->id])}}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">
                                    <h5 class="text-center"> No tags found</h5>
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

