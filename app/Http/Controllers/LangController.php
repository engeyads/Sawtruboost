<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class LangController extends Controller
{
    /** Created with ❤️ by Iyad Sammour
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function index()

    {

        return view('lang');

    }



    /** Created with ❤️ by Iyad Sammour
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function change(Request $request)

    {

        App::setLocale($request->lang);

        session()->put('locale', $request->lang);



        return redirect()->back();

    }
}
