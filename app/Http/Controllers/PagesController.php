<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use App\Models\Areas;
use App\Models\Leads;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\userProfiles;
use App\Notifications\newlead;
use Notification;
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
     * Show the Contacts Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the Careers Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function careers()
    {
        return view('careers');
    }

    /**
     * Show the Partners Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function partners()
    {
        return view('partners');
    }

    /**
     * Show the Terms Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms()
    {
        return view('terms');
    }

    /**
     * Show the Privacy Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privacy()
    {
        return view('privacy');
    }

    /**
     * Show the Cookies Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cookies()
    {
        return view('cookies');
    }
     /**
     * Show the Boostnow Landing Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function boostnow()
    {
        return view('landing.boostnow');
    }

    /**
     * Show the People Page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function people(Request $request)
    {
        $locale = (session()->get('locale') == 'en' || session()->get('locale') == '') ? '' : session()->get('locale');
        $people = User::with('userProfile')->paginate(7); //fetch all People  from DB
        $grid = '';
        if ($request->ajax()) {
            foreach ($people as $result) {
                if($result->name != 'admin'){
                    $grid.='
                    <div class="col-md-4 pb-8">
                        <div class="card b-h-box position-relative font-14 border-0 mb-4">
                            <a  class="a card-meta-tagList-item">
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
                            <h5 class="card-title my-3 font-weight-normal">'. ucfirst($result->userProfile['full_name'.$locale]) .'</h5>'.
                            (strlen($result->userProfile['career'.$locale]) > 150 ? '<p class="text-black">'. substr(ucfirst($result->userProfile['career'.$locale]), 0, 150)  .'...</p>' : '<p class="text-black">'.  ucfirst($result->userProfile['career'.$locale]).'</p>').
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
        $email='';
        $tag = '';
        $phone = '000';
        $area = '90';
        if($request->email == ''){
            $email='no email';
            $tag = 'no tag';
        }else{
            $email = $request->email;
            $tag = substr($request->email, 0,strpos($request->email,"@"));
        }

        if($request->phone == ''){
            $phone = '000';
            $area = '90';
        }else{
            $phone = $request->phone;
            $area = $request->area;
        }
        $newLead = Leads::create([
            'name' => $request->name,
            'company' => $request->company,
            'area' => $area,
            'phone' => $phone,
            'email' => $email,
            'service' => $request->service,
            'website' => $request->website,
            'msg' => $request->msg,
        ])->userProfile()->create([
            'tag' => $tag,
            'full_name' => $request->name,
            'mobile' => $phone,
            'country' => $area
        ]);

        //newlead::send('iyad@sawtruboost.com', 'new lead has been registered'.$newLead->name);

        return back()->withStatus(__('Suceessfuly stored!'));
    }

    /**Eyad
     * Sammour
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

    /**Eyad
     * Sammour
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCommenttoPost(Request $request)
    {
        $id = auth()->user()->id;

        $input = Comments::create([
            'uid' => $request->uid,
            'pid' => $pid,
            'content' => $request->content,
        ]);

        return response()->json([
            "status" => true,
            "data" => $input
        ]);
    }
}
