@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'blog'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blogs</h4>
                    </div>


                    <div class="col-12 pt-2">
                        <a href="{{ ('blog.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>
                        <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                            <h1 class="display-4">Create a New Post</h1>
                            <p>Fill and submit this form to create a post</p>

                            <hr>

                            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="title">Post Featured Image</label>
                                        <input type="file" id="featured" class="form-control" name="featured"
                                               placeholder="Enter Post Featured Image" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="title">Post Title</label>
                                        <input type="text" id="title" class="form-control" name="title"
                                               placeholder="Enter Post Title" required>
                                    </div>
                                    <div class="control-group col-12 mt-2">
                                        <label for="body">Post Body</label>
                                        <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                                  rows="" required></textarea>
                                    </div>

                                    {{--<div class="control-group col-12 mt-2">
                                        <label for="images">Post images</label>
                                        <input type='file' id="images" class="form-control" name="images" placeholder="Enter Post images"
                                                  rows="" multiple required/>
                                    </div>--}}
                                </div>
                                <div class="row mt-2">
                                    <div class="control-group col-12 text-center">
                                        <button id="btn-submit" class="btn btn-primary">
                                            Create Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
