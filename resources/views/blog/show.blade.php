@extends('layouts.app')
@section('content')
<section class='w-full second'>
    <div>
    <div class="container">

            <div class="col-12 pt-2">
                <div class='w-full row p-12'>
                    <div class='absolute left-0'>
                        <a href="/blog" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-left"></i> back</a>
                    </div>
                    <div class='absolute right-0'>
                        <a href="{{ route('blog.endshow',$next) }}" class="btn btn-primary btn-sm">Next <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class=" b-h-box position-relative font-14 border-0 mb-4">
                    <img class="card-img-inside"
                        src="{{ $post->featured_image == '' ? URL::asset('postimages/default-blog.jpg') : URL::asset('postimages').'/'.$post->featured_image }}"
                        alt="post image" />
                </div>
                <h1 class="display-one fontBlont text-xl">{{ ucfirst($post->title) }}</h1>

                <div class='pt-12'>

                    <p>{{ $post->body }}</p>
                </div>
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
        @push('custom-scripts')
            <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
        @endpush
@endsection
