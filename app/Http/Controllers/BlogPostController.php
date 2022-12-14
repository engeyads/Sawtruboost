<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\PostImage;
use Storage;
use Image;
class BlogPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['endindex','endshow']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::with('post_images')->orderby('created_at','desc')->paginate(9); //fetch all blog posts from DB
	    return view('pages.blog.index', [
            'posts' => $posts,
        ]); //returns the view with posts
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function endindex(Request $request)
    {
        $posts = BlogPost::with('post_images')->orderby('created_at','desc')->paginate(4); //fetch all blog posts from DB
        $artilces = '';
        if ($request->ajax()) {
            foreach ($posts as $result) {
                $artilces.='
                <div class="col-md-6">
                    <div class="card b-h-box position-relative font-14 border-0 mb-4">
                        <a href="./blog/'. $result->id .'" class="a card-meta-tagList-item">
                            <img class="card-img"
                                src="'. ($result->featured_image == "" ? '/postimages/default-blog.jpg' : '/postimages/' . $result->featured_image ).
                                '" alt="Card image" />

                        </a>
                    </div>
                    <div class=" overflow-hidden">
                        <div class="d-flex align-items-center">
                            <span
                                class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">'. $result->author->name .'</span>
                            <div class="ml-2">
                                <span class="ml-2">'. date('d-m-Y', strtotime($result->created_at)) .'</span>
                            </div>
                        </div>
                        <h5 class="card-title my-3 font-weight-normal">'. ucfirst($result->title) .'</h5>'.
                        (strlen($result->body) > 30 ? '<p class="card-text">'. substr(ucfirst($result->body), 0, 30)  .'...</p>' : '<p class="card-text">'. substr('', 0, 10) .' ...</p>').
                    '</div>
                </div>
                ';
            }
            return $artilces;
        }

        return view('blog.index', [
            'posts' => $posts,
        ]); //returns the view with posts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        $image = $request->featured;
        $filename = $image->getClientOriginalName();
        Image::make($image->getRealPath())->save('postimages/' . $filename);

        $title = $request->title;
        $body = $request->body;
        //$images = $request->images;

        $newPost = BlogPost::create([
            'featured_image' => $filename,
            'title' => $title,
            'body' => $body,
            'uid' => $user_id
        ]);

        /*
        foreach($images as $image){
            $imagePath = Storage::disk('uploads')->put($user->email . '/posts/' .$post->id, $image);
            PostImage::create([
                'post_image_caption' => $title,
                'post_image_path' => $imagePath,
                'post_id' => $title,
            ]);
        }
        */

        return redirect('blog/' . $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        return view('pages.blog.show', [
            'post' => $blogPost,
        ]); //returns the view with the post
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function endshow(BlogPost $blogPost)
    {
        return view('blog.show', [
            'post' => $blogPost,
        ]); //returns the view with the post
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('pages.blog.edit', [
            'post' => $blogPost,
            ]); //returns the edit view with the post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('/dashboard/blog/' . $blogPost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect('/dashboard/blog');
    }
}
