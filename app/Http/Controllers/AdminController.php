<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function ViewCategory()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function AddCategory(Request $request)
    {
        $data = new Category();
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function DeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }

    public function AddProduct(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->screen_size = $request->screen_size;
        $product->screen_resolution = $request->screen_resolution;
        $product->screen_refresh_rate = $request->screen_refresh_rate;
        $product->device_weight = $request->device_weight;
        $product->graphics_type = $request->graphics_type;
        $product->graphics_card_memory = $request->graphics_card_memory;
        $product->ssd_capacity = $request->ssd_capacity;
        $product->operating_system = $request->operating_system;
        $product->processor = $request->processor;
        $product->processor_generation = $request->processor_generation;
        $product->processor_type = $request->processor_type;
        $product->processor_speed = $request->processor_speed;
        $product->ram = $request->ram;
        $product->keyboard = $request->keyboard;
        $product->color = $request->color;
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('products_images', $imageName);
        $product->image = $imageName;
        $product->save();

        return redirect()->back()->with('message','Product added successfully');

    }

    public function ViewProduct()
    {
        $categories = Category::all();
        return view('admin.add_product', compact('categories'));
    }

    public function ShowProduct()
    {
        $products = Product::all();
        return view('admin.show_product', compact('products'));
    }
}
