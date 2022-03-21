<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile() {
        return view('user.profile');
    }
    public function editprofile() {
        return view('user.editprofile');

    }
    public function updateprofile(Request $request) {
        $user = Auth::user();
        
        $user->name = $request->name;
        $user->phone = $request->phone;
        if($request->has('image')) {
            $image = $request->file('image');
            $fileName = $image->hashName();
            $image->move(public_path().'/profilepic/',$fileName);
            $user->image = $fileName;
        } 
        else {
            $user->image = Auth::user()->image;
        }
        $user->save();

    }
    public function landing() {
        return view('frontend.index');
    }
    public function about() {
        return view('frontend.about');
    }
    public function e404() {
        return view('frontend.404');
    }
    public function dashboard() {
        $user = Auth::user();
        if($user->type == 0) {
            return view('user.index');
        } else {
            return view('admin.index');
        }
    }
}
