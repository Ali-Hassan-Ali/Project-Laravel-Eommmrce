<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use Auth;

class ProfileController extends Controller
{

    public function index()
    {
        
    }//end of index


    public function create()
    {
        //
    }//end of create


    public function store(Request $request)
    {
        //
    }//end of store

    public function changePassword(Request $request,User $user,$id)
    {
                // dd($request->all());
        // $user = User::find(Auth::id());

       $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
    }


    public function show(user $users, $id)
    {
        $users = User::find($id);
        return view('home.profile' ,compact('users'));
    }//end of show


    public function edit(user $user)
    {
        //
    }//end of edit


    public function update(Request $request, user $user)
    {
        // dd($request->all());
        $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'image',
        ]);

        $user = User::find(Auth::id());

        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($user->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/user_images/' . $user->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $user->update($request_data);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }//end of update


    public function destroy(user $user)
    {
        if ($user->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/user_images/' . $user->image);

        }//end of if

        $user->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');
    }//end of destroy

}//end of controller
