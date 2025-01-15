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



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    route::get('/dashboard', [HomeController::class, 'Home'])->name('dashboard');
});


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
Route::get('/search-product', [AdminController::class, 'SearchProduct']);
Route::get('/search-order', [AdminController::class, 'SearchOrder']);
route::get('/user-orders', [AdminController::class, 'UserOrders'])->name('admin.user_orders');
route::get('/update-order/{user_id}/{order_id}/{delivery_status}', [AdminController::class, 'UpdateOrder']);
route::get('/print-bill/{order_id}', [AdminController::class, 'PrintBill']);
route::get('/customers', [AdminController::class, 'Customers']);
route::get('/delete-user/{id}', [AdminController::class, 'DeleteUser']);
Route::get('/search-user', [AdminController::class, 'SearchUser']);
Route::get('/admin/orders', [AdminController::class, 'index'])->name('admin.orders');
// Route::get('/admin/myaccount', [AdminController::class, 'show'])->name('admin.myaccount');
Route::get('/myaccount', [AdminController::class, 'showMyAccount'])->name('admin.myaccount');

Route::get('/admin/statistic', [AdminController::class, 'showStatistic'])->name('admin.statistic');
// Route::get('/admin/statistic/download', [AdminController::class, 'downloadStatistic'])->name('admin.statistic.download');
// Route::get('/admin/statistics/download', [AdminController::class, 'downloadStatistics'])->name('admin.statistic.download');

/* User routes */

route::get('/', [HomeController::class, 'index']);
route::get('/home', [HomeController::class, 'Home'])->name('home')->middleware('auth');
route::get('/my-account', [HomeController::class, 'UserAccount'])->name('user.account');
route::get('/user/logout', [HomeController::class, 'UserLogout'])->name('user.logout');
Route::get('/product_details/{id}',[HomeController::class, 'ProductDetails']);
Route::get('/shop', [HomeController::class, 'ShopPage'])->name('user.shop');
Route::get('/contact', [HomeController::class, 'ContactPage'])->name('user.contact');
Route::post('/add-to-cart/{id}', [HomeController::class, 'AddToCart']);
Route::get('/my-cart',[HomeController::class, 'CartPage'])->name('user.cart');
Route::get('/remove-product-from-cart/{id}',[HomeController::class, 'RemoveProductFromCart']);
Route::get('/clear-cart', [HomeController::class, 'ClearCart'])->name('user.clear_cart');
Route::get('/checkout', [HomeController::class,'Checkout'])->name('user.checkout');
Route::get('/orders', [HomeController::class, 'UserOrders'])->name('user.orders');
Route::get('/order-received/{id}', [HomeController::class, 'OrderReceived']);
Route::get('/cancel-order/{id}', [HomeController::class, 'CancelOrder']);
Route::get('/search-a-product', [HomeController::class, 'SearchProduct']);
Route::get('/update-password', [HomeController::class, 'UpdatePassword']);
Route::get('/technology-news', [HomeController::class, 'GetTechnologyNews'])->name('news');
// Route::get('/payment/{totalPrice}', [HomeController::class, 'showPaymentForm'])->name('payment.form');
// Route::post('/payment/stripe/{totalPrice}', [HomeController::class, 'processStripe'])->name('stripe.post');
// Route::post('/payment/cod', [HomeController::class, 'processCOD'])->name('cod.post');
// Route::get('/about', [HomeController::class, 'about_me'])->name('user.about_me');
// Route::post('/payment/process', [HomeController::class, 'process'])->name('payment.process');


Route::get('/cash-order', [HomeController::class, 'CashOrder']);
Route::get('/stripe/{totalPrice}', [HomeController::class, 'Stripe']);
Route::post('/stripe/{totalPrice}', [HomeController::class, 'StripePost'])->name('stripe.post');

Route::get('/ewallet/{totalPrice}', [HomeController::class, 'ewallet'])->name('payment.ewallet');
Route::get('/cod/{totalPrice}', [HomeController::class, 'cod'])->name('payment.cod');

Route::get('/checkout/success', function () {
    return view('user.success'); // Ubah ke 'user.success'
})->name('checkout.success');

// routes/web.php
// Route::get('/checkout/success', function () {
//     return view('checkout.success');
// })->name('checkout.success');