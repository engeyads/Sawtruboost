@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'blog',
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
                        <a href="{{ route('blog.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>
                        <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                            <h1 class="display-4">Edit Post</h1>
                            <p>Edit and submit this form to update a post</p>

                            <hr>

                            <form action="{{ route('blog.update', $post->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <img id='featuredimg' src="{{ $post->featured_image == '' ? '' : asset('postimages') . '/' . $post->featured_image }}"
                                        width='300' alt="featured">
                                    <div class="control-group col-12">
                                        <label for="title">Post Featured Image</label>
                                        <input type="file" id="featured" class="form-control" name="featured"
                                            placeholder="Enter Post Featured Image" >
                                    </div>

                                    <div class="control-group col-12">
                                        <label for="title">Post Title</label>
                                        <input type="text" id="title" class="form-control" name="title"
                                            placeholder="Enter Post Title" value="{{ $post->title }}" required>
                                    </div>
                                    <div class="control-group col-12 mt-2">
                                        <label for="body">Post Body</label>
                                        <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body" style='height:20rem' required>{!! $post->body !!}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="control-group col-12 text-center">
                                        <button id="btn-submit" class="btn btn-primary">
                                            Update Post
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
        <script>
            $('#featured').on('change', function() {
                if ($(this).val() != '') {

                    let fd = new FormData();
                    fd.append('featured', $(this).get(0).files[0]);

                    $.ajax({
                        url: "{{ route('blog.featured', $post) }}",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        data: fd,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        dataType: 'json',
                        success: function(result) {
                            $('#featuredimg').attr('src','{{ asset('postimages') . '/' }}'+result);
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
