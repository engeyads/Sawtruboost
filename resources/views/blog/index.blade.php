@extends('layouts.app')



@section('content')
    <section class='w-full blogspage'>

        <!-- SEARCH SECTION -->
        <section id="search">
            <h2 id="blogPost-header">Recent Blog Posts</h2>
            <input type="text" id="blogSearch" placeholder="What sounds yummy today?">
        </section>
        @can('create-blogs')
            <div class="col-4">
                <p>Create new Post</p>
                <a href="/dashboard/blog/create" class="btn btn-primary btn-sm">Add Post</a>
            </div>
        @endcan
        <!-- BLOG POSTS -->
        <section class="blog-posts ">
            <div class="card-container">

                    <div class="blog-home5 py-5 w-full">



                            <div id='data-wrapper' class="row mt-4 blogs">

                            </div>

                        <div class="auto-load text-center">
                            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                <path fill="#000"
                                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                        from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>



        </section>


    </section>
    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
        <script>
            // blog search
            const blogSearch = document.querySelector('#blogSearch');
            blogSearch.addEventListener("keyup", filterPosts);

            function filterPosts() {
                let filterValue = blogSearch.value.toLowerCase();
                const posts = document.querySelectorAll(".articles").forEach(post => {
                    post.innerText.toLowerCase().indexOf(filterValue) >
                        -1 ? post.style.display = '' : post.style.display = 'none';
                })
            }

        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            var ENDPOINT = "{{ url('/') }}";
            var page = 1;
            infinteLoadMore(page);
            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()-$('footer').height()) {
                    page++;
                    infinteLoadMore(page);
                }
            });

            function infinteLoadMore(page) {
                $.ajax({
                        url: ENDPOINT + "/blog?page=" + page,
                        datatype: "html",
                        type: "get",
                        beforeSend: function() {
                            $('.auto-load').show();
                        }
                    })
                    .done(function(response) {
                        if (response.length == 0) {
                            $('.auto-load').html("<p class='p-12'>Thank you for checking out our blog. Thats it :)</p>");
                            return;
                        }
                        $('.auto-load').hide();
                        $("#data-wrapper").append(response);
                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError) {
                        console.log('Server error occured');
                    });
            }
        </script>
    @endpush
@endsection
