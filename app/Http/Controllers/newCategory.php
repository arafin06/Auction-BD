<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class newCategory extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function newCategory(Request $request){
        $categoryImage = $request->file('category_image');
        $directory = "category-image/";
        $imageName = $categoryImage->getClientOriginalName();
        $categoryImage->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

        $category = new Category();

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_image = $imageUrl;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/manage_category')->with('messege', 'Category added Successfully');
    }
    public function manageCategory(){
        $categorys = Category::all();
        return view('admin.category.manage-category',['categories'=>$categorys]);
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/manage_category')->with('messege', 'Category Deleted Successfully');
    }

}
