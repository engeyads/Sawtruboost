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

                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Blogs</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('blog.create', '') }}"> Create Blog</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">


                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    <th>

                                    </th>
                                </thead>
                                <tbody>
                                    @forelse($posts as $post)
                                        <tr>
                                            <td>
                                                <a href="{{ route('blog.edit', $post->id) }}">{{ ucfirst($post->title) }}</a>
                                            </td>
                                            <td>
                                                {{ ucfirst($post->created_at) }}
                                            </td>
                                            <td>
                                                <div class='flex'>
                                                    <form id="delete-frm" class=""
                                                        action="{{ route('blog.destroy', $post->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-outline-danger">Delete Post</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <p class="text-warning">No posts available</p>
                                    @endforelse


                                </tbody>
                            </table>
                            {{ $posts->onEachSide(5)->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
