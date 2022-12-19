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
                                        <label for="title">Post Title for English</label>
                                        <input type="text" id="title" class="form-control" name="title"
                                               placeholder="Enter Post Title for English" required>
                                    </div>

                                    <div ng-app="textAngularTest" class="container app">
                                        <h3>Editor for English Blog</h3>
                                        <text-angular ng-model="htmlcontent"></text-angular>

                                        <textarea name='body' ng-model="htmlcontent" style="width: 100%;display:none" rows="10"></textarea>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="titlear">Post Title for Arabic</label>
                                        <input type="text" id="titlear" class="form-control" name="title"
                                               placeholder="Enter Post Title for Arabic" required>
                                    </div>

                                    <div ng-app="textAngularTestAr" class="container app">
                                        <h3>Editor for Arabic Blog</h3>
                                        <text-angular ng-model="htmlcontent"></text-angular>

                                        <textarea name='bodyar' ng-model="htmlcontent" style="width: 100%;display:none" rows="10"></textarea>


                                    </div>
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
    @push('scripts')
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
    <script>

            var app = angular.module("textAngularTest", ["textAngular"]);
            var app2 = angular.module("textAngularTestAr", ["textAngular"]);




    </script>
    @endpush
@endsection
