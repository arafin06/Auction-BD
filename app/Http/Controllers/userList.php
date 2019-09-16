<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class userList extends Controller
{
    public function userView(){
        return view ('admin.user.user_list');
    }

    public function viewMessage(){

        $message = Message::latest('id')->get();


        return view('admin.message.message',[
            'messages' => $message
        ]);
    }
}
