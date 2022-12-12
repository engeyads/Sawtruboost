@extends('layouts.app')
@section('content')
<section class='w-full second'>
    <div>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>

                <p>{!! $post->body !!}</p>
                <hr>
                @can('edit-blogs')
                    <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                @endcan
                @can('delete-blogs')
                    <br><br>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete Post</button>
                    </form>
                @endcan
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
