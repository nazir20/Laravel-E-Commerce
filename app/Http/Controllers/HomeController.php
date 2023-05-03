<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;


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

    public function AddToCart(Request $request, $id)
    {
        if(Auth::id()){

            $user = Auth::user();
            $product = Product::find($id);

            /* check if the requested quantity is more then stock quantity */
            if($request->quantity > $product->quantity){
                return redirect()->back()->with('message', 'The requested quantity for this product exceeds the available stock. We have only '.$product->quantity.' of this product in out stock.');
            }else{
                /* check if product already exits in the card
                in this case just the quantity and price should be updated
            */
                $cart = Cart::where('product_id', $product->id)->where('user_id', $user->id)->first();
                if ($cart) {
                    // if the cart record exists, update the quantity and price columns
                    $cart->quantity += $request->quantity;
                    $cart->price += strval(intval($product->discount_price) * intval($request->quantity));
                    $cart->save();
                } else {

                    $cart = new Cart();
                    $cart->user_id = $user->id;
                    $cart->name = $user->name;
                    $cart->email = $user->email;
                    $cart->phone = $user->phone;
                    $cart->address = $user->address;
                    $cart->product_title = $product->title;
                    $cart->product_id = $product->id;
                    $cart->quantity = $request->quantity;
                    $cart->price = strval(intval($product->discount_price) * intval($request->quantity));
                    $cart->image = $product->image;
                    $cart->save();
                }

                // update the quantity in products table
                $product->quantity -= $request->quantity;
                $product->save();

                return redirect()->back();
            }

        }else{
            return redirect('login');
        }
    }
}
