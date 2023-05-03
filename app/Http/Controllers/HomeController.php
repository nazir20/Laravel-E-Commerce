<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $products = Product::all();
        return view('user.index', compact('products','categories'));
    }

    public function redirect(){

        $userType = Auth::user()->usertype;
        if($userType == '1'){
            return view('admin.home');
        }else{
            $categories = Category::all();
            $products = Product::all();
            return view('user.index', compact('products', 'categories'));
        }

    }

    public function UserLogout(Request $request): RedirectResponse
    {

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function ProductDetails($id)
    {
        $product = Product::find($id);
        return view('user.product_details', compact('product'));
    }

    public function ShopPage()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('user.shop', compact('products', 'categories'));
    }

    public function ContactPage()
    {
        return view('user.contact');
    }
}
