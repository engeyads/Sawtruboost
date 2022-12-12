@extends('layouts.app')

@section('content')
    <section class='w-full second'>

            <!-- SEARCH SECTION -->
            <section id="search">
                <h2 id="blogPost-header">Recent Blog Posts</h2>
                <input type="text" id="blogSearch" placeholder="What sounds yummy today?">
            </section>
            @can('create-blogs')
                <div class="col-4">
                    <p>Create new Post</p>
                    <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                </div>
            @endcan
            <!-- BLOG POSTS -->
            <section class="blog-posts">
                <div class="card-container">
                    <div class="blog-home5 py-5">
                        <div class="row mt-4">
                    <!-- CARD -->
                    @forelse($posts as $post)

                    <div class="col-md-4">
                        <div class="card b-h-box position-relative font-14 border-0 mb-4">
                            <a href="./blog/{{ $post->id }}"
                                class="a card-meta-tagList-item">
                            <img class="card-img"
                                src={{ URL::asset('images/top-view-man-doing-online-shopping-his-laptop.webp') }}
                                alt="Card image" />
                            <div class="card-img-overlay overflow-hidden">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Admin</span>
                                    <div class="ml-2">
                                        <span class="ml-2">Nov 18, 2022</span>
                                    </div>
                                </div>
                                <h5 class="card-title my-3 font-weight-normal">{{ ucfirst($post->title) }}</h5>
                                {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p> --}}
                            </div>
                            </a>
                        </div>
                    </div>

                    @empty
                        <p class="text-warning">No blog Posts available</p>
                    @endforelse
                        </div>
                    </div>
                    {{ $posts->onEachSide(5)->links() }}

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
                const posts = document.querySelectorAll(".card").forEach(post => {
                    post.innerText.toLowerCase().indexOf(filterValue) >
                        -1 ? post.style.display = '' : post.style.display = 'none';
                })
            }
            // intersection observer
            const header = document.querySelector(".hero");
            const mainNav = document.querySelector(".mainNav");

            const navObsCallback = (e) => {
                !e[0].isIntersecting ? mainNav.classList.add("applyBackground") : mainNav.classList.remove(
                    "applyBackground");
            }
            const navObsOptions = {}

            const navObs = new IntersectionObserver(navObsCallback, navObsOptions);

            navObs.observe(header);
        </script>
    @endpush
@endsection
