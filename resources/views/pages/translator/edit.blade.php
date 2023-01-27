@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'translator',
])

@section('content')
    <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-header">
                        <h4 class="card-title">Translator</h4>
                    </div>


                    <div class="col-12 pt-2">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <a href="{{ route('documents.index') }}" class="btn btn-outline-primary btn-sm">Go
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
                                                            <input name='privacy' type="checkbox" class='privacy'
                                                                data-id="{{ $post->id }}" id='privacy'
                                                                @if ($post->privacy == 1) checked @endif />
                                                            <label for="privacy"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="date"
                                                                value="{{ date('Y-m-d', strtotime($post->publish_date)) }}"
                                                                min='{{ date('Y-m-d') }}' data-id="{{ $post->id }}"
                                                                data-current='{{ date('Y-m-d', strtotime($post->publish_date)) }}'
                                                                name='publish_date' class='form-control pubdate'
                                                                id='pubdate{{ $post->id }}'>
                                                            <span class='btn btn-warning pubconfirm'
                                                                data-id="{{ $post->id }}" style='display:none'
                                                                id='pubdatebutton{{ $post->id }}'>confirm</span>
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
                            <h1 class="display-4">Edit Post</h1>
                            <p>Fill and submit this form to Edit your post</p>

                            <img id='featuredimg'
                                src="{{ $post->featured_image == '' ? '' : asset('postimages') . '/' . $post->featured_image }}"
                                width='300' alt="featured">
                            <div class="control-group col-12">
                                <label for="title">Post Featured Image</label>
                                <input type="file" id="featured" class="form-control" name="featured" placeholder="">
                            </div>
                            <form action="{{ route('documents.update', $post->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <hr>

                                <div class="row">

                                    <div class="control-group col-12">
                                        <label for="seo_descriptionen">SEO discription</label>
                                        <input type="text" id="seo_description" class="form-control"
                                            name="seo_descriptionen" placeholder="Enter SEO Description for english page"
                                            value="{{ $post->seo_descriptionen }}" required>
                                    </div>
                                    <div class="control-group col-12">
                                        <label for="seo_keywordsen">SEO Keywords (key1, key2, ...)</label>
                                        <input type="text" id="seo_keywords" class="form-control" name="seo_keywordsen"
                                            value="{{ $post->seo_keywordsen }}"
                                            placeholder="Enter SEO Keywords for english page" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="title">Post Title for English</label>
                                        <input type="text" id="title" class="form-control" name="titleen"
                                            value="{{ $post->titleen }}" placeholder="Enter Post Title for English"
                                            required>
                                    </div>

                                    <textarea name="bodyen" id="inp_editor1">
                                        {{ $post->bodyen }}

                                    </textarea>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="titlear">Post Title for Arabic</label>
                                        <input type="text" id="titlear" class="form-control" name="titlear"
                                            value="{!! $post->titlear !!}" value="{{ $post->titlear }}"
                                            placeholder="Enter Post Title for Arabic" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="seo_descriptionar">SEO discription Arabic</label>
                                        <input type="text" id="seo_descriptionar" class="form-control"
                                            name="seo_descriptionar" value="{{ $post->seo_descriptionar }}"
                                            placeholder="Enter SEO Description for Arabic page" required>
                                    </div>
                                    <div class="control-group col-12">
                                        <label for="seo_keywordsar">SEO Keywords Arabic (المفتاح1, المفتاح2, ...)</label>
                                        <input type="text" id="seo_keywordsar" class="form-control"
                                            value="{{ $post->seo_keywordsar }}" name="seo_keywordsar"
                                            placeholder="Enter SEO Keywords for Arabic page" required>
                                    </div>


                                    <textarea name="bodyar" id="inp_editor2">
                                        {!! $post->bodyar !!}
                                    </textarea>

                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="control-group col-12">
                                        <label for="titletr">Post Title for Turkish</label>
                                        <input type="text" id="titlear" class="form-control" name="titletr"
                                            value="{!! $post->titletr !!}" value="{{ $post->titletr }}"
                                            placeholder="Enter Post Title for Turkish" required>
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="seo_descriptiontr">SEO discription Turkish</label>
                                        <input type="text" id="seo_descriptiontr" class="form-control"
                                            name="seo_descriptiontr" value="{{ $post->seo_descriptiontr }}"
                                            placeholder="Enter SEO Description for Turkish page" required>
                                    </div>
                                    <div class="control-group col-12">
                                        <label for="seo_keywordstr">SEO Keywords Turkish (anahtar1, anahtar2, ...)</label>
                                        <input type="text" id="seo_keywordstr" class="form-control"
                                            value="{{ $post->seo_keywordstr }}" name="seo_keywordstr"
                                            placeholder="Enter SEO Keywords for Turkish page" required>
                                    </div>


                                    <textarea name="bodytr" id="inp_editor3">
                                        {!! $post->bodytr !!}
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
        <script type="text/javascript" src="/richtexteditor/rte.js"></script>
        <script type="text/javascript" src='/richtexteditor/plugins/all_plugins.js'></script>

        <!-- Initialize Quill editor -->
        <script>
            var editor1 = new RichTextEditor("#inp_editor1");
            var editor2 = new RichTextEditor("#inp_editor2");
            var editor3 = new RichTextEditor("#inp_editor3");

            // immediate change privacy of post
            $('.privacy').on('change', function() {
                let chkd = 0;
                if ($(this).prop('checked')) {
                    chkd = 1;
                }

                let fd = new FormData();
                fd.append('privacy', chkd);

                $.ajax({
                    url: "/documents/editprivacy/" + $(this).data('id'),
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType: 'json',
                    success: function(result) {

                        //$('#featuredimg').attr('src','{{ asset('postimages') . '/' }}'+result);
                    },
                    error: function(result) {
                        console.log(result);
                    }
                });

            });

            // immediate scheduel date
            $('.pubconfirm').on('click', function() {
                let fd = new FormData();
                fd.append('publish_date', $(this).prev().val());

                $.ajax({
                    url: "/documents/editdate/" + $(this).data('id'),
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType: 'json',
                    success: function(result) {
                        $(this).css('display', 'none');
                        //$('#featuredimg').attr('src','{{ asset('postimages') . '/' }}'+result);
                    },
                    error: function(result) {
                        console.log(result);
                    }
                });
            });
            $('.pubdate').on('change', function() {
                if ($(this).val() != $(this).data('current')) {
                    $(this).next().css('display', 'block');

                } else {
                    $(this).next().css('display', 'none');
                }
            });

            // immidiate change featured image
            $('#featured').on('change', function() {
                if ($(this).val() != '') {

                    let fd = new FormData();
                    fd.append('featured', $(this).get(0).files[0]);

                    $.ajax({
                        url: "{{ route('documents.featured', $post) }}",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        data: fd,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        dataType: 'json',
                        success: function(result) {
                            $('#featuredimg').attr('src', '{{ asset('postimages') . '/' }}' + result);
                        },
                        error: function(result) {
                            console.log(result);
                        }
                    });
                }
            });
        </script>
    @endpush
@endsection
