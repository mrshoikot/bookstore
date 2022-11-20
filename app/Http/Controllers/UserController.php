<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function changePassword(Request $request)
    {
        $request->validate([
            'old_pass'  => 'required',
            'new_pass'  => 'required|confirmed|min:8'
        ]);

        $user = Auth::user();

        if (Hash::check($request->old_pass,$user->password)) {
            $user->password = Hash::make($request->new_pass);
            $user->save();
            return response(['message' => 'Password successfully updated'], 200);
        } else {
            return response(['message' => __('messages.wrongPassword')], 422);
        }
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::id(),
            'location' => 'required',
        ]);

        Auth::user()->update($request->all());

        return back();
    }
}
