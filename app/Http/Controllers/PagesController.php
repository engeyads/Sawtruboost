<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use App\Models\Areas;
use App\Models\Leads;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\userProfiles;
class PagesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function boostnow()
    {
        return view('landing.boostnow');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function people(Request $request)
    {
        $people = User::with('userProfile')->paginate(6); //fetch all blog posts from DB
        $grid = '';
        if ($request->ajax()) {
            foreach ($people as $result) {
                if($result->name != 'admin'){
                    $grid.='
                    <div class="col-md-4 pb-8">
                        <div class="card b-h-box position-relative font-14 border-0 mb-4">
                            <a href="./people/'. $result->id .'" class="a card-meta-tagList-item">
                                <img class="card-img"
                                    src="'. ($result->userProfile->photo == "" ? '/profiles/default-avatar.png' : '/profiles/' . $result->userProfile->photo ).
                                    '" alt="Card image" />

                            </a>
                        </div>
                        <div class=" overflow-hidden">
                            <div class="d-flex align-items-center">

                                <div class="ml-2">

                                </div>
                            </div>
                            <h5 class="card-title my-3 font-weight-normal">'. ucfirst($result->userProfile->full_name) .'</h5>'.
                            (strlen($result->userProfile->bio) > 0 ? '<p class="card-text">'. substr(ucfirst($result->userProfile->bio), 0, 150)  .'...</p>' : '<p class="card-text">'. substr('', 0, 150) .' ...</p>').
                        '</div>
                    </div>
                ';
            }
            }
            return $grid;
        }

        return view('people', [
            'people' => $people,
        ]); //returns the view with posts
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storelead(Request $request)
    {
        $newLead = Leads::create([
            'name' => $request->name,
            'company' => $request->company,
            'area' => $request->area,
            'phone' => $request->phone,
            'email' => $request->email,
            'service' => $request->service,
            'website' => $request->website,
            'msg' => $request->msg,
        ])->userProfile()->create([
            'tag' => substr($request->email, 0,strpos($request->email,"@")),
            'full_name' => $request->name,
            'mobile' => $request->phone,
            'country' => $request->area
        ]);

        return back()->withStatus(__('Suceessfuly stored!'));
    }

    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        $posts = BlogPost::orderby('created_at','desc')->paginate(5); //fetch all blog posts from DB
        return view('pages.blog.index',[
            'posts' => $posts,
        ]);
    }
}
