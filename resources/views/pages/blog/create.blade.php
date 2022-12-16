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

                                    <div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app">
                                        <h3>Editor</h3>
                                        <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent" ta-disabled='disabled'></div>
                                        <h3>Raw HTML in a text area</h3>
                                        <textarea name='body' ng-model="htmlcontent" style="width: 100%" rows="10"></textarea>
                                        <h3>Bound with ng-bind-html</h3>
                                        <div ng-bind-html="htmlcontent"></div>
                                        <h3>Bound with ta-bind, our internal html-binding directive</h3>
                                        <div ta-bind="text" ng-model="htmlcontent" ta-readonly='disabled'></div>
                                        <button type="button" ng-click="htmlcontent = orightml">Reset</button>
                                        <p>Note: although we support classes and styles, angularjs' ng-bind-html directive will strip out all style attributes.</p>

                                        <h3>Option to masquerade as a fancy text-area - complete with form submission and optional ngModel</h3>
                                        <text-angular name="htmlcontent"><p>Any <b>HTML</b> we put in-between the text-angular tags gets automatically put into the editor if there <strong style="font-size: 12pt;"><u><em>is not</em></u></strong> a ngModel</p></text-angular>
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
    @push('scripts')
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
    <script>
        	angular.module("textAngularTest", ['textAngular']);
            function wysiwygeditor($scope) {
                $scope.orightml = '';
                $scope.htmlcontent = $scope.orightml;
                $scope.disabled = false;
            };

    </script>
    @endpush
@endsection
