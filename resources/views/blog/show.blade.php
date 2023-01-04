@extends('layouts.app')

@section('SEO')
    <meta name="description" content="{{ $post['seo_description'.(session()->get('locale') == '' ? 'en' : session()->get('locale'))] }}" />
    <meta name="keywords" content="{{ $post['seo_keywords'.(session()->get('locale') == '' ? 'en' : session()->get('locale'))] }}" />
@endsection

@section('content')
<section class='w-full second'>
    <style>
        pre{
            background: black;
        }
        code{
            color: white;
        }
    </style>
    <div>
    <div class="container">

            <div class="col-12 pt-2">
                <div class='w-full row p-12'>
                    <div class='absolute left-0'>
                        <a href="/blog" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-left"></i> Back</a>
                    </div>
                    <div class='absolute right-0'>
                        <a href="{{ route('blog.endshow',$prev) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-left"></i> Prevous</a>
                        <a href="{{ route('blog.endshow',$next) }}" class="btn btn-warning btn-sm">Next <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class=" b-h-box position-relative font-14 border-0 mb-4">
                    <img class="card-img-inside"
                        src="{{ $post->featured_image == '' ? URL::asset('postimages/default-blog.jpg') : URL::asset('postimages').'/'.$post->featured_image }}"
                        alt="post image" />
                </div>
                <h1 class="display-one fontBlont text-xl">{!! ucfirst($post['title'.(session()->get('locale') == '' ? 'en' : session()->get('locale'))]) !!}</h1>

                <div class='pt-12'>

                    {!! $post['body'.(session()->get('locale') == '' ? 'en' : session()->get('locale'))] !!}
                </div>
                <div>
                    <h3 class="fontBlont text-xl">Comments:</h3>
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

                <div class="row">
                    @if(auth()->check())
                    <table>
                        <tr>
                            <td>
                                <div class="comment">
                                    <label for="managercomment">Comment:</label>
                                    <textarea placeholder="Comment" name="managercomment" id="comment" cols="10" rows="3"></textarea>
                                    <span class="btn btn-info pull-right"
                                        onclick="submitComment(  {{ auth()->user()->id }},{{ $post->id }})">Send</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                    @endif
                        <table class="w-full">
                            @forelse ($post->comments as $comment)
                                @if ($comment->available == 1)
                                    <tr id="cmnt{{ $comment->id }}" >
                                        <td class="py-2">
                                            <div id="cmntuser{{ $comment->id }}" class="comments-username">
                                                <b>{{ $comment->user->name }}</b><br>

                                            </div>
                                            @if(auth()->check())
                                                @if ($comment->uid == auth()->user()->id &&
                                                    date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))) <
                                                        date('Y-m-d H:i:s', strtotime($comment->created_at . ' + 5 minutes')))
                                                    <div class="comments-remove" onclick="deleteComment({{ $comment->id }})">

                                                    </div>
                                                @endif
                                            @endif

                                            <div class="comments">
                                                {{ $comment->content }}
                                            </div>
                                            <div class="comments-timestamp">
                                                <small>{{ $comment->created_at }}</small>
                                            </div>
                                        </td>
                                    </tr>
                                @endif

                                @empty
                                No Comments
                            @endforelse
                        </table>


                </div>
            </div>
        </div>

    </div>
</section>
        @push('custom-scripts')
            <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
            <script>
                function myFunction() {

                  // Select the text field
                  this.select();
                  this.setSelectionRange(0, 99999); // For mobile devices

                  // Copy the text inside the text field
                  navigator.clipboard.writeText(this.value);

                }

                $( "<button class='copycode btn btn-warning absolute right-0 mt-4 mr-8'>copy</button>" ).insertBefore($( "code" ));
                if($('.copycode')[0]){
                    $('.copycode').click(function() {
                        var txt = $(this).next().find('xmp').text();
                        var $temp = $("<input>");
                        $(this).append($temp);
                        $temp.val(txt).select();
                        document.execCommand("copy");
                        $temp.remove();
                    });
                }

                function submitComment(uid, pid) {
                        if ($('#comment').val() != '') {
                            $.ajax({
                                type: 'put',
                                url: {{ route('blog.comment') }},
                                data: {
                                    '_token': $("meta[name='csrf-token']").attr("content"),
                                    'uid': uid,
                                    'pid': pid,
                                    'content': $('#comment').val(),
                                },
                                success: function(data) {
                                    row = $("<tr id='cmnt" + data.data.id + "'></tr>");
                                    col1 = $('<td ><div id="cmntuser' + data.data.id +
                                        '" class="comments-username"><b>you</b><br></div><div class="comments-remove" onclick="deleteComment(' +
                                        data.data.id + ')"></div><div class="comments">' + data.data.content +
                                        '</div><div class="comments-timestamp">    <small>' + new Date(data.data
                                            .created_at) + '</small></div></td>');
                                    row.append(col1).prependTo("#comments-table table");
                                }
                            });
                        }
                    }
                </script>
        @endpush
@endsection
