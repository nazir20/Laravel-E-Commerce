<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', [HomeController::class, 'index']);


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
});


route::get('/redirect', [HomeController::class,'redirect'])->name('redirect');
route::get('/user/logout', [HomeController::class, 'UserLogout'])->name('user.logout');

/* Admin Routes */

route::get('/view_category', [AdminController::class, 'ViewCategory'])->name('admin.category');
route::post('/add_category', [AdminController::class, 'AddCategory'])->name('admin.add_category');
route::get('/delete_category/{id}', [AdminController::class, 'DeleteCategory']);
route::get('/view_product', [AdminController::class, 'ViewProduct'])->name('admin.view_product');
route::post('/add_product', [AdminController::class, 'AddProduct'])->name('admin.add_product');
route::get('/show_product', [AdminController::class, 'ShowProduct'])->name('admin.show_product');
route::get('/delete_product/{id}', [AdminController::class, 'DeleteProduct'])->name('admin.delete_product');
route::get('/edit_product/{id}', [AdminController::class, 'EditProduct'])->name('admin.edit_product');
route::post('/update_product/{id}', [AdminController::class, 'UpdateProduct']);

/* User routes */

route::get('/product_details/{id}', [HomeController::class, 'ProductDetails']);
route::get('/shop', [HomeController::class, 'ShopPage'])->name('user.shop');
route::get('/contact', [HomeController::class, 'ContactPage'])->name('user.contact');
route::post('/add-to-cart/{id}', [HomeController::class, 'AddToCart']);