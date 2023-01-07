<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teams;
use App\Models\userProfiles;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Response;
use DB;

class UserController extends Controller
{
    /** Created with ❤️ by Iyad Sammour
        * Display a listing of the users
        *
        * @param  \App\Models\User  $model
        * @return \Illuminate\View\View
    */
    public function index(User $model)
    {
        $roles = Role::pluck('name','name')->all();
        return view('user.index', compact('roles'),['users' => $model->paginate(7)]);
    }

    /** Created with ❤️ by Iyad Sammour
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('auth.create',compact('roles'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['name'] = substr($request->email,0,strpos($request->email, '@'));
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        $userProfile = userProfiles::create([
            'uid' => $user->id,
            'full_name' => $request->name,
        ]);

        return redirect()->route('user.index')
                        ->with('success','User created successfully');
    }

    /** Created with ❤️ by Iyad Sammour
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show',compact('user'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }

    /** Created with ❤️ by Iyad Sammour
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $user = User::with('teams')->find($id);
        $team = userProfiles::where([
                ['team','=',$user->userProfile->team]
            ]);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('auth.users.edit',compact('user','roles','userRole','team'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['name'] = substr($request->email,0,strpos($request->email, '@'));
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));


        $userProfile = userProfiles::where('uid',$id)->update([
            'full_name' => $request->name,
        ]);
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /** Created with ❤️ by Iyad Sammour
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
    */
    public function changerole(Request $request, $id)
    {
        $user = User::find($id);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('role'));
        return Response::json( $request->input('role') );

    }

    /** Created with ❤️ by Iyad Sammour
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Models\User  $User
        * @return \Illuminate\Http\Response
    */
    public function editprivacy(Request $request, $id)
    {
        $user = User::find($id);
        $user->update(['public' => $request->privacy]);

        return Response::json( $request->privacy );
    }
}
