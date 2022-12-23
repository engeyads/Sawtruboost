@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'blog',
])

@section('content')
    <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-header">
                            <h4 class="card-title">Blogs</h4>
                        </div>


                        <div class="col-12 pt-2">
                            <div class="card-header">

                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        <div class="pull-left">
                                            <a href="{{ route('blog.index') }}" class="btn btn-outline-primary btn-sm">Go
                                                back</a>
                                        </div>
                                        <div class="pull-right">
                                            <hr>
                                            <div class='flex'>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label for="">Public</label>
                                                        </td>

                                                        <td>
                                                            <label for="pubdate">Publish date</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='margin:0;padding:0'>
                                                            <div class="switch">
                                                                <input type="checkbox" id='privacy' checked />
                                                                <label for="privacy"></label>
                                                                <input type="hidden" name='privacy' id='privacychk'
                                                                    value='1'>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="date" name='publish_date'
                                                                    class='form-control' id='pubdate'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                                <h1 class="display-4">Create a New Post</h1>
                                <p>Fill and submit this form to create a post</p>

                                <hr>


                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="title">Post Featured Image</label>
                                        <input type="file" id="featured" class="form-control" name="featured"
                                            placeholder="Enter Post Featured Image" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="seo_description">SEO discription</label>
                                        <input type="text" id="seo_description" class="form-control"
                                            name="seo_description" placeholder="Enter SEO Description for english page"
                                            required>
                                    </div>
                                    <div class="control-group col-12">
                                        <label for="seo_keywords">SEO Keywords (key1, key2, ...)</label>
                                        <input type="text" id="seo_keywords" class="form-control" name="seo_keywords"
                                            placeholder="Enter SEO Keywords for english page" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="title">Post Title for English</label>
                                        <input type="text" id="title" class="form-control" name="title"
                                            placeholder="Enter Post Title for English" required>
                                    </div>

                                    <textarea name="body" id="inp_editor1"></textarea>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="titlear">Post Title for Arabic</label>
                                        <input type="text" id="titlear" class="form-control" name="titlear"
                                            placeholder="Enter Post Title for Arabic" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="seo_descriptionar">SEO discription Arabic</label>
                                        <input type="text" id="seo_descriptionar" class="form-control"
                                            name="seo_descriptionar" placeholder="Enter SEO Description for Arabic page"
                                            required>
                                    </div>
                                    <div class="control-group col-12">
                                        <label for="seo_keywordsar">SEO Keywords Arabic (المفتاح1, المفتاح2, ...)</label>
                                        <input type="text" id="seo_keywordsar" class="form-control" name="seo_keywordsar"
                                            placeholder="Enter SEO Keywords for Arabic page" required>
                                    </div>


                                    <textarea name="bodyar" id="inp_editor2"></textarea>


                                </div>
                                <div class="row mt-2">
                                    <div class="control-group col-12 text-center">
                                        <button id="btn-submit" class="btn btn-primary">
                                            Create Post
                                        </button>
                                    </div>
                                </div>

                            </div>
                    </form>
                </div>

            </div>
        </div>


    </div>
    </div>

    @push('scripts')
        <script type="text/javascript" src="/richtexteditor/rte.js"></script>
        <script type="text/javascript" src='/richtexteditor/plugins/all_plugins.js'></script>

        <!-- Initialize Quill editor -->
        <script>
            var editor1 = new RichTextEditor("#inp_editor1");
            var editor2 = new RichTextEditor("#inp_editor2");

            Date.prototype.toDateInputValue = (function() {
                var local = new Date(this);
                local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
                return local.toJSON().slice(0, 10);
            });

            $('#pubdate').val(new Date().toDateInputValue());

            $('#privacy').on('change', function() {
                if ($(this).prop('checked')) {
                    $('#privacychk').val(1);
                } else {
                    $('#privacychk').val(0);
                }

            });
        </script>
    @endpush
@endsection
