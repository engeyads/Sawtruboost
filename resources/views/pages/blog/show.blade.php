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
                <a href="{{ route('blog.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>

                {!! $post->body !!}
                <hr>
                @can('edit-blogs')
                    <a href="{{ route('blog.edit',$post->id) }}" class="btn btn-outline-primary">Edit Post</a>
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
    </div>
</section>
@push('scripts')

@endpush
@endsection
