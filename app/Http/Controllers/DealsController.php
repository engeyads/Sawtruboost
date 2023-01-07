<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deals;

class DealsController extends Controller
{
    /** Created with ❤️ by Iyad Sammour
     * Display a listing of the leads
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $deals = Deals::orderby('created_at','desc')->paginate(9); //fetch all blog posts from DB
	    return view('pages.crm.deals.index', [
            'deals' => $deals,
        ]); //returns the view with posts
    }

    /** Created with ❤️ by Iyad Sammour
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        return '';
    }

    /** Created with ❤️ by Iyad Sammour
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return '';
    }

    /** Created with ❤️ by Iyad Sammour
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id){
        return '';
    }

   /** Created with ❤️ by Iyad Sammour
     * Update the lead
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(){
        return '';
    }

    /** Created with ❤️ by Iyad Sammour
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id){
        return '';
    }

    /** Created with ❤️ by Iyad Sammour
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     * @return \Illuminate\Http\Response
     */
    public function edit(){
        return '';
    }

}
