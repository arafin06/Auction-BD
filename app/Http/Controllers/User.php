<?php

namespace App\Http\Controllers;

use App\FrontUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function loginUser(){
        return view('front.login.login');
    }

    public function nabout(){
        return view('front.about.about');
    }

    public function nachievements(){
        return view('front.achievements.achievements');
    }

    public function ncontact(){
        return view('front.contact.contact');
    }

    public function ntermsandconditions(){
        return view('front.termsandconditions.termsandconditions');
    }










    public function userLoginCheck(){

    }
    public function registration(Request $request){
        $frontUser= new FrontUser();

        $frontUser->name = $request->name;
        $frontUser->email = $request->email;
        $frontUser->password = $request->password;
        $frontUser->nid = $request->nid;
        $frontUser->mobile = $request->mobile;
        $frontUser->password = $request->password;
        $frontUser->save();

        return redirect('/')->with('messege', 'Product added Successfully');
    }
}
