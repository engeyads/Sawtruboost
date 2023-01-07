<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Storage;
use Image;
use App\Models\userProfiles;
use App\Models\User;
use App\Models\Teams;

class ProfileController extends Controller
{
    /** Created with ❤️ by Iyad Sammour
        * Show the form for editing the profile.
        *
        * @return \Illuminate\View\View
    */
    public function edit()
    {
        return view('profile.edit');
    }

    /** Created with ❤️ by Iyad Sammour
        * Update the profile
        *
        * @param  \App\Http\Requests\ProfileRequest  $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->except(['name']));
        auth()->user()->userProfile()->update([
            'full_name' => $request->name,
            'full_namear' => $request->namear,
            'full_nametr' => $request->nametr,
        ]);
        return back()->withStatus(__('Profile successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Update the profile info
        *
        * @param  \App\Http\Requests\Request  $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function infoupdate(Request $request)
    {
        auth()->user()->userProfile()->update([
            'career' => $request->career,
            'careerar' => $request->careerar,
            'careertr' => $request->careertr,
            'country' => $request->country,
            'mobile' => $request->mobile,
        ]);
        return back()->withStatus(__('Profile successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Update the profile
        *
        * @param  \App\Http\Requests\Request  $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function otherupdate(Request $request,$id)
    {
        $user = User::find($id);
        $user->userProfile()->update([
            'full_name' => $request->name,
            'full_namear' => $request->namear,
            'full_nametr' => $request->nametr,
        ]);
        if($request->email != $user->email){
            $user->update($request->except(['name']));
        }

        return back()->withStatus(__('User Profile successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Update the profile information
        *
        * @param  \App\Http\Requests\Request  $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function otherinfoupdate(Request $request,$id)
    {
        $user = User::find($id);
        $user->userProfile()->update([
            'career' => $request->career,
            'careerar' => $request->careerar,
            'careertr' => $request->careertr,
            'country' => $request->country,
            'mobile' => $request->mobile,
        ]);

        return back()->withStatus(__('User Profile successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Change the password
        *
        * @param  \App\Http\Requests\PasswordRequest  $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Change the profile image
        *
        * @param  Illuminate\Http\Request $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function profile(Request $request)
    {
        $image = $request->file('profile');

        $filename = $image->getClientOriginalName();
        Image::make($image->getRealPath())->save('profiles/' . $filename);

        auth()->user()->userProfile()->update(['photo' => $filename]);

        return back()->withStatus(__('photo successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Change the profile image
        *
        * @param  Illuminate\Http\Request $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function otherphoto(Request $request,$id)
    {
        $user = User::find($id);
        $image = $request->file('profile');

        $filename = $image->getClientOriginalName();
        Image::make($image->getRealPath())->save('profiles/' . $filename);

        $user->userProfile()->update(['photo' => $filename]);

        return back()->withStatus(__('photo successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Change the profile image
        *
        * @param  Illuminate\Http\Request $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function profileBackground(Request $request)
    {
        $image = $request->file('bgphoto');
        $filename = date('dmYHis') .'-usr'. auth()->user()->id . '.' . $image->getClientOriginalExtension();

        $width = 600; // your max width
        $height = 600; // your max height
        $image = Image::make($image->getRealPath());
        $image->height() > $image->width() ? $width=null : $height=null;
        $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image->save('profiles/bgphoto/' . $filename);

        auth()->user()->userProfile()->update(['bgphoto' => $filename]);

        return back()->withStatus(__('bgphoto successfully updated.'));
    }

    /** Created with ❤️ by Iyad Sammour
        * Change the profile image
        *
        * @param  Illuminate\Http\Request $request
        * @return \Illuminate\Http\RedirectResponse
    */
    public function otherphotoBackground(Request $request,$id)
    {
        $user = User::find($id);
        $image = $request->file('bgphoto');
        $filename = date('dmYHis') .'-usr'. $id . '.' . $image->getClientOriginalExtension();

        $width = 600; // your max width
        $height = 600; // your max height
        $image = Image::make($image->getRealPath());
        $image->height() > $image->width() ? $width=null : $height=null;
        $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image->save('profiles/bgphoto/' . $filename);

        $user->userProfile()->update(['bgphoto' => $filename]);

        return back()->withStatus(__('bgphoto successfully updated.'));
    }
}
