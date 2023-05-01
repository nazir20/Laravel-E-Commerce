<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function ViewCategory(){
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function AddCategory(Request $request){
        $data = new Category();
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function DeleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
