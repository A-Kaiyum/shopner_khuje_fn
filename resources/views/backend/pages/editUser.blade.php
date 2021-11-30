@extends('backend.layouts.master')
@section('title','user')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create user</h3>
                    <a href="{{route('user.index')}}" class="btn btn-primary">Back To List</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div>
                    @include('backend.pages.errors')
                </div>

                <div class="col-lg-12 col-md-6">
                    <form action="{{route('user.update',[$user->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="userName" placeholder="Enter user name">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="userEmail" placeholder="Enter user name">
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" name="password" value="" class="form-control" id="userPassword" placeholder="Enter user password">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
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
                                    <div class="col-4">
                                        <div style="width:100px; height:100px;overflow: hidden; margin-left: auto">
                                            <img src="{{asset($user->image)}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="summernote" rows="4" class="form-control" placeholder="Enter Description">
                                    {{$user->description}}
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



