<?php

namespace App\Http\Controllers;

use App\Bidding;
use App\Client;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function newClient(Request $request){

        $client = new Client();

        $client->name = $request->name;
        $client->mobile = $request->mobile;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->nid = $request->nid;
        $client->password = bcrypt($request->password);

        $client->save();

        Session::put('client_id', $client->id);
        Session::put('client_name', $client->name);

        return redirect('/');

    }

    public function logoutClient(){
        Session::forget('client_id');
        Session::forget('client_name');

        return redirect('/');
    }

    public function loginClient(Request $request){

        $client = Client::where('email', $request->email)->first();


        if (password_verify($request->password, $client->password)) {
            Session::put('client_id', $client->id);
            Session::put('client_name', $client->name);


            return redirect('/');
        }
    }






    public function message(Request $request){
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->mobile = $request->mobile;
        $message->district = $request->district;
        $message->message = $request->message;

        $message->save();

        return redirect('/contact')->with('message', 'Your message has been sent. Our team will contact with you shortly.');
    }

    public function bid(Request $request){
        $bidding = new Bidding();

        $bidding->bid_amount = $request->bid_amount;
        $bidding->client_id = $request->client_id;
        $bidding->client_name = $request->client_name;
        $bidding->product_id = $request->product_id;
        $bidding->product_name = $request->product_name;

        $bidding->save();

        return redirect('/')->with('message', 'Your Bid has been placed. We will contact with you, if you win the bid. Thanks For Bidding.');
    }






    //admin

    public function clientList(){

        $client=Client::all();

        return view('admin.client.client-list',[
            'clients'=> $client
        ]);
    }

}
