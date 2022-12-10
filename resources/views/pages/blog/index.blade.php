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
                        <h4 class="card-title"> Users</h4>
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
                                                <a href="./post/{{ $post->id }}">{{ ucfirst($post->title) }}</a>
                                            </td>
                                            <td>
                                                <a href="./post/{{ $post->id }}">{{ ucfirst($post->created_at) }}</a>
                                            </td>
                                            <td>
                                                <div class='flex'>

                                                        <br><br>
                                                        <form id="delete-frm" class="" action="" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-danger">Delete Post</button>
                                                        </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <p class="text-warning">No posts available</p>
                                    @endforelse


                                </tbody>
                            </table>
                            {{ $posts->onEachSide(5)->links() }}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
