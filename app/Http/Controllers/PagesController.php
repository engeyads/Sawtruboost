<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use App\Models\Areas;
use App\Models\Leads;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function people()
    {
        return view('people');
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
