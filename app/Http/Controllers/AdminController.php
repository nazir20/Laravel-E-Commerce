<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function ViewCategory()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $categories = Category::all();
                return view('admin.category', compact('categories'));
                
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function AddCategory(Request $request)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $data = new Category();
                $data->category_name = $request->category;
                $data->save();
                return redirect()->back()->with('message', 'Category Added Successfully');
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }

    }

    public function DeleteCategory($id)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $category = Category::find($id);
                $category->delete();
                return redirect()->back();

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }

    }

    public function AddProduct(Request $request)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

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
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $request->image->move('products_images', $imageName);
                $product->image = $imageName;
                $product->save();

                Alert::success('Product Added Successfully!', 'You have added a new product');
                return redirect()->route('admin.show_product');

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
        
    }

    public function ViewProduct()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $categories = Category::all();
                return view('admin.add_product', compact('categories'));
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }

    }

    public function ShowProduct()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $products = Product::orderBy('id', 'desc')->get();
                return view('admin.show_product', compact('products'));

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
        
    }

    public function DeleteProduct($id)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $product = Product::find($id);
                $product->delete();
                return redirect()->back()->with('message', 'The Product has been deleted successfully');

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
        
    }

    public function EditProduct($id)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $product = Product::find($id);
                $categories = Category::all();
                return view('admin.edit_product', compact('product'));

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    
    }

    public function UpdateProduct(Request $request, $id)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $product = Product::find($id);
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

                if ($request->hasFile('image')) {
                    $image = $request->image;
                    @unlink(public_path('products_images/' . $product->image));
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $request->image->move('products_images', $imageName);
                    $product->image = $imageName;
                } else {
                    $product->image = $product->image;
                }
                $product->save();

                Alert::success('Successfully Updated', 'The product has been successfully updated!');
                return redirect()->route('admin.show_product');

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
        
    }

    public function UserOrders()
    {
        if(Auth::check()){
            $userType = Auth::user()->usertype;
            if($userType == 1){

                $orders = Order::where('delivery_status', '!=', 'passive_order')->get();
                return view('admin.orders', compact('orders'));

            }else{
                return redirect('login');
            }
        }else{
            return redirect('login');
        }
    }

    public function UpdateOrder($user_id, $order_id,$delivery_status)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $order = Order::where('user_id', $user_id)->where('id', $order_id)->first();
                
                if($order){
                    // the order was found, update the delivery status
                    if($delivery_status == 'cancel_order'){
                        $product = Product::find($order->product_id);
                        if ($product) {
                            // Update the quantity of the product in the products table
                            $product->quantity += $order->quantity;
                            $product->save();

                            // Remove the product from the cart
                            $order->delete();

                            return redirect()->back();
                        } else {
                            return redirect()->back()->with('error', 'Product not found!');
                        }
                    }else{
                        $order->delivery_status = $delivery_status;
                        $order->save();
                        return redirect()->back();
                    }
                }else{
                    return redirect()->back();
                }
                
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function PrintBill($order_id)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $order = Order::where('id', $order_id)->first();

                if ($order) {
                    
                    $pdf = PDF::loadView('admin.user_bill', compact('order'));
                    return $pdf->download('order_bill'.$order->id.'.pdf');

                } else {
                    return redirect()->back();
                }

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function SearchProduct(Request $request)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $searchText = $request->search;
                $products  = Product::where('title','LIKE',"%$searchText%")->orWhere('ram', 'LIKE', "%$searchText%")->orWhere('category', 'LIKE', "%$searchText%")->get();
                return view('admin.show_product', compact('products'));
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function SearchOrder(Request $request)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $searchText = $request->search;
                $orders  = Order::where('tracking_id', 'LIKE', "%$searchText%")->where('delivery_status', '!=', 'passive_order')->get();
                return view('admin.orders', compact('orders'));
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function Customers()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $users = User::where('userType','=',0)->get();
                return view('admin.customers',compact('users'));

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function DeleteUser($id)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                User::where('id','=',$id)->delete();
                Cart::where('user_id','=',$id)->delete();
                Order::where('user_id','=',$id)->delete();

                return redirect()->back();

            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function SearchUser(Request $request)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;
            if ($userType == 1) {

                $searchText = $request->search;
                $users  = User::where('name', 'LIKE', "%$searchText%")->orWhere('email', 'LIKE', "%$searchText%")->get();
                return view('admin.customers', compact('users'));
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }
}
