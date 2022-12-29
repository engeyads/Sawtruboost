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
                </script>
        @endpush
@endsection
