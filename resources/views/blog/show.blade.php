@extends('layouts.app')
@section('content')
<section class='w-full second'>
    <div>
    <div class="container">

            <div class="col-12 pt-2">
                <div class=" b-h-box position-relative font-14 border-0 mb-4">
                    <img class="card-img-inside"
                        src="{{ $post->featured_image == '' ? URL::asset('postimages/default-blog.jpg') : URL::asset('postimages').'/'.$post->featured_image }}"
                        alt="post image" />
                </div>
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>

                <p>{!! $post->body !!}</p>
                <hr>
                @can('edit-blogs')
                    <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-outline-primary">Edit Post</a>
                @endcan
                @can('delete-blogs')
                    <br><br>
                    <form id="delete-frm" class="" action="{{ route('blog.destroy', $post->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete Post</button>
                    </form>
                @endcan
            </div>
        </div>

    </div>
</section>
@endsection
