<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::where('publication_status', 1)->get();
        return view('admin.product.add-product',[
            'categories'    =>  $categories
        ]);
    }

    public function manageProduct(){
        $products = Product::all();
        return view('admin.product.manage-product',['products'=>$products]);
    }

    public function newProduct(Request $request){
        $productImage = $request->file('product_image');
        $directory = "product-image/";
        $imageName = $productImage->getClientOriginalName();
        $productImage->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

        $product = new Product();

        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->product_bid_date = $request->product_bid_date;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();

        return redirect('/manage_product')->with('messege', 'Product added Successfully');
    }
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/manage_product')->with('messege', 'Product Deleted Successfully');
    }
}
