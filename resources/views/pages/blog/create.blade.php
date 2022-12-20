@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'blog',
])

@section('content')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blogs</h4>
                    </div>


                    <div class="col-12 pt-2">
                        <a href="{{ 'blog.index' }}" class="btn btn-outline-primary btn-sm">Go back</a>
                        <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                            <h1 class="display-4">Create a New Post</h1>
                            <p>Fill and submit this form to create a post</p>

                            <hr>

                            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="title">Post Featured Image</label>
                                        <input type="file" id="featured" class="form-control" name="featured"
                                            placeholder="Enter Post Featured Image" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="seo_description">SEO discription</label>
                                        <input type="text" id="seo_description" class="form-control" name="seo_description"
                                            placeholder="Enter SEO Description for english page" required>
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
                                    <textarea name="body" id="" cols="30" rows="10" class='editor'>


                                    </textarea>
                                </div>

                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="titlear">Post Title for Arabic</label>
                                        <input type="text" id="titlear" class="form-control" name="title"
                                            placeholder="Enter Post Title for Arabic" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="seo_keywordsar">SEO discription Arabic</label>
                                        <input type="text" id="seo_keywordsar" class="form-control" name="seo_keywordsar"
                                            placeholder="Enter SEO Description for Arabic page" required>
                                    </div>
                                    <div class="control-group col-12">
                                        <label for="seo_descriptionar">SEO Keywords Arabic (المفتاح1, المفتاح2, ...)</label>
                                        <input type="text" id="seo_descriptionar" class="form-control" name="seo_descriptionar"
                                            placeholder="Enter SEO Keywords for Arabic page" required>
                                    </div>




                                    <textarea name="bodyar" id="" cols="30" rows="10" class='editor'>


                                    </textarea>

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
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>


            $('.editor').each(function(i, el) {
                var el = $(this),
                    id = 'quilleditor-' + i,
                    val = el.val(),
                    editor_height = 200;
                var div = $('<div/>').attr('id', id).css('height', editor_height + 'px').html(val);
                el.addClass('d-none');
                el.parent().append(div);

                var quill = new Quill('#' + id, {
                    modules: {
    toolbar: [
      ['bold', 'italic'],
      ['link', 'blockquote', 'code-block', 'image'],
      [{ list: 'ordered' }, { list: 'bullet' }]
    ]
  },
                    theme: 'snow'
                });
                quill.on('text-change', function() {
                    el.html(quill.getContents());
                });
            });
        </script>

    @endpush
@endsection
