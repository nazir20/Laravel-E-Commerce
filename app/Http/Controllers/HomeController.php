<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;


class HomeController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('user.index', compact('products'));
    }

    public function redirect(){

        $userType = Auth::user()->usertype;
        if($userType == '1'){
            return view('admin.home');
        }else{
            $products = Product::all();
            return view('user.index', compact('products'));
        }

    }

    public function UserLogout(Request $request): RedirectResponse
    {

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
