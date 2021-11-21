@extends('backend.layouts.master')
@section('title','Post')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create post</h3>
                    <a href="{{route('post.index')}}" class="btn btn-primary"> Go Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div>
                    @include('backend.pages.errors')
                </div>

                <div class="col-lg-12 col-md-6">
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Post Title</label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="postTitle" placeholder="Enter Post Title">
                            </div>
                            <div class="form-group">
                                <label for="category">Select Post Category</label>
                                <select name="category_id" id="category" class="form-control">
                                    <option value="" style="display: none" selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="postDescription" rows="4" class="form-control" placeholder="Enter Description">
                                    {{old('description')}}
                                    </textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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

