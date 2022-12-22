<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function endindex(Request $request)
    {
        $posts = BlogPost::with('post_images')->where([
            ['publish_date' ,'>=',Date('Y-m-d')],
            ['privacy','=','1']
            ])->orderby('created_at','desc')->paginate(4); //fetch all blog posts from DB
        $artilces = '';
        if ($request->ajax()) {
            foreach ($posts as $result) {
                $artilces.='
                <div class="col-md-5 pb-8">
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
        $title = $request->title;
        $body = $request->body;
        $titlear = $request->titlear;
        $bodyar = $request->bodyar;
        $seo_keywords = $request->seo_keywords;
        $seo_description = $request->seo_description;
        $seo_keywordsar = $request->seo_keywordsar;
        $seo_descriptionar = $request->seo_descriptionar;
        $publish_date = $request->publish_date;
        $privacy = $request->privacy;

        $newPost = BlogPost::create([
            'title' => $title,
            'body' => $body,
            'titlear' => $titlear,
            'bodyar' => $bodyar,
            'seo_keywords' => $seo_keywords,
            'seo_description' => $seo_description,
            'seo_keywordsar' => $seo_keywordsar,
            'seo_descriptionar' => $seo_descriptionar,
            'publish_date' => $publish_date,
            'privacy' => $privacy,
            'uid' => $user_id
        ]);

        // rename the uploaded file
        $filename = date('dmYHis') .'-post'. $newPost->id . '.' . $image->getClientOriginalExtension();
        Image::make($image->getRealPath())->save('postimages/' . $filename);

        $newPost->update([
            'featured_image' => $filename
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
        $next = $blogPost->id;
		$prev = $blogPost->id;
        if(BlogPost::where([
            ['id', '>', $blogPost->id],
            ['publish_date' ,'>=',Date('Y-m-d')],
            ['privacy','=','1']
            ])->min('id')){
            $next = BlogPost::where('id', '>', $blogPost->id)->min('id');
        }elseif(BlogPost::where([
            ['id', '<', $blogPost->id],
            ['publish_date' ,'>=',Date('Y-m-d')],
            ['privacy','=','1']
            ])->min('id')){
            $next = BlogPost::where('id', '<', $blogPost->id)->min('id');
        }

        if(BlogPost::where('id', '<', $blogPost->id)->max('id')){
            $prev = BlogPost::where([
                ['id', '<', $blogPost->id],
                ['publish_date' ,'>=',Date('Y-m-d')],
                ['privacy','=','1']
                ])->max('id');
        }elseif(BlogPost::where('id', '>', $blogPost->id)->max('id')){
            $prev = BlogPost::where([
                ['id', '>', $blogPost->id],
                ['publish_date' ,'>=',Date('Y-m-d')],
                ['privacy','=','1']
                ])->max('id');
        }

        return view('blog.show', [
            'post' => $blogPost,
            'next' => $next,
            'prev' => $prev
        ]);
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
        $blogPost->update($request->all());

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function updatepostimage(Request $request, BlogPost $blogPost)
    {
        $image = $request->file('featured');

        $filename = date('dmYHis') .'-post'. $blogPost->id . '.' . $image->getClientOriginalExtension();
        Image::make($image->getRealPath())->save('postimages/' . $filename);

        $blogPost->update(['featured_image' => $filename]);

        return Response::json( $filename );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function editprivacy(Request $request, BlogPost $blogPost)
    {

        $blogPost->update(['privacy' => $request->privacy]);

        return Response::json( $request->privacy );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function editpublishdate(Request $request, BlogPost $blogPost)
    {

        $blogPost->update(['publish_date' => $request->publish_date]);

        return Response::json( $request->publish_date );
    }
}
