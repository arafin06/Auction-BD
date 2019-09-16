<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class onlineAuction extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        return view('front.home.home',[
            'categories'    =>  $categories
        ]);
    }
    public function addProduct(){
        return view('front.product.add-product');
    }
    public function selectCategory($id){
        $categories = Category::where('publication_status', 1)->get();
        $products = Product::where('publication_status', 1)
                            ->where('category_id', $id)
                            ->get();
        return view('front.category.select-category',[
            'categories'    =>  $categories,
            'products'      =>$products
        ]);
    }
    public function selectProduct($id){
        $product= Product::find($id);
        return view('front.product.product',[
                'product'   =>$product
            ]);
    }
}
