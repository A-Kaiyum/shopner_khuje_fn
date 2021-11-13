@extends('backend.layouts.master')
@section('title','Category')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Category - {{$category->name}}</h3>
                    <a href="{{route('category.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div>
                    @include('backend.pages.errors')
                </div>

                <div class="col-lg-12 col-md-6">
                    <form action="{{route('category.update',[$category->id])}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="categoryName" value="{{$category->name}}" placeholder="Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="categoryDescription" value="" rows="4" class="form-control"  placeholder="Enter Description">
                                        {{$category->description}}
                                    </textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    </div>

@endsection

