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
                                        by
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
                                                <a
                                                    href="{{ route('blog.edit', $post->id) }}">{{ ucfirst($post->title) }}</a>
                                            </td>
                                            <td>
                                                {{ ucfirst($post->author->name) }}
                                            </td>
                                            <td>
                                                {{ ucfirst($post->created_at) }}
                                            </td>
                                            <td>
                                                <div class='flex'>
                                                    <table>
                                                        <tr>
                                                            <td style='border:0'>
                                                                <span>Public</span>
                                                            </td>
                                                            <td style='margin:0;padding:0;border:0'>
                                                                <div class="switch">
                                                                    <input name='privacy' type="checkbox" class='privacy'
                                                                        data-id="{{ $post->id }}"
                                                                        id='privacy{{ $post->id }}'
                                                                        @if ($post->privacy == 1) checked @endif />
                                                                    <label for="privacy{{ $post->id }}"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <div>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    Publish Date
                                                                </td>
                                                                <td>
                                                                    <input type="date"
                                                                        value="{{ date('Y-m-d', strtotime($post->publish_date)) }}"
                                                                        min='{{ date('Y-m-d') }}'
                                                                        data-id="{{ $post->id }}"
                                                                        data-current='{{ date('Y-m-d', strtotime($post->publish_date)) }}'
                                                                        name='publish_date' class='form-control pubdate'
                                                                        id='pubdate{{ $post->id }}'>
                                                                    <button class='pubconfirm'
                                                                        data-id="{{ $post->id }}" style='display:none'
                                                                        id='pubdatebutton{{ $post->id }}'>confirm</button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
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

    @push('scripts')
        <script>
            $('.privacy').on('change', function() {
                let chkd = 0;
                if ($(this).prop('checked')) {
                    chkd = 1;
                }

                let fd = new FormData();
                fd.append('privacy', chkd);

                $.ajax({
                    url: "/blog/editprivacy/" + $(this).data('id'),
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

            $('.pubconfirm').on('click', function() {
                let fd = new FormData();
                fd.append('publish_date', $(this).prev().val());

                $.ajax({
                    url: "/blog/editdate/" + $(this).data('id'),
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
        </script>
    @endpush
@endsection
