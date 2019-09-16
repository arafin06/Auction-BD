<?php

namespace App\Http\Controllers;

use App\Bidding;
use App\Client;
use Illuminate\Http\Request;

class productList extends Controller
{
    public function productView(){
        return view('admin.product.product_view');
    }

    public function viewBid($id){
        $biddings = Bidding::where('product_id', $id)->get();

        return view('admin.product.view-bid',[
            'biddings' =>$biddings
        ]);
    }

    public function viewClient($id){
        $client = Client::where('id', $id)->first();

        return view('admin.product.view-client',[
            'client'=>$client
        ]);
    }
}
