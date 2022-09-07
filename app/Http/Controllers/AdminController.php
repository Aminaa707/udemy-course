<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect('/');
    } // End Method


    public function adminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    } // End Method


    public function EditAdminProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('admin.admin_profile_edit', compact('editData'));
    } // End Method

    public function storeAdminProfile(Request $request)
    {

        $id = Auth::user()->id;
        $updateData = User::find($id);

        $updateData->name = $request->name;
        $updateData->username = $request->username;
        $updateData->email = $request->email;

        if ($request->file('profile_img')) {
            $file = $request->file('profile_img');

            $fileName = date('YmdHi') . $file->getClientOriginalName();

            $file->move(public_path('upload/admin_images'), $fileName);

            $updateData["profile_img"] = $fileName; // profile img nam kno ei vabe newa holo?
        }

        $updateData->save();

        $notification = array(
            'message' => 'Admin Profile Updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    } // End Method


    public function changeAdminPassword()
    {
        return view('admin.admin_change_password');
    } // End Method


    public function updateAdminPassword(Request $request)
    {
        $validateData = $request->validate([
            'oldPassword' => "required",
            'newPassword' => "required",
            'confairmPassword' => "required | same:newPassword", // Checking 2 new password is same or not 
        ]);

        $hashedPassword = Auth::user()->password;   // geting logdin user's password

        if (Hash::check($request->oldPassword, $hashedPassword)) { // checking requested old password and logdin user passwrod same or not

            $users = User::find(Auth::id()); // finding logdin ueser ID
            $users->password = bcrypt($request->newPassword); // setting new Password 
            $users->save(); // and did save.

            session()->flash('message', 'Password Updated Successfully');
            // return redirect()->back();
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();


            return redirect('/');
        } else {
            session()->flash('message', 'Old Password is not match');
            return redirect()->back();
        }
    } // End Method
}
