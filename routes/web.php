<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductGridController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\ReviewCartController;
use App\Http\Controllers\CheckOutDetailController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\CheckOutCompleteController;
use App\Http\Controllers\ManageOrderController;
use App\Http\Controllers\LogoutController;
use Illuminate\Auth\Events\Logout;

//use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'home']);
Route::get('/cart/count', [HomeController::class, 'cartItemCount'])->name('cart.count');






Route::post('/contact', [ContactController::class, 'send']);
Route::post('/carts', [HomeController::class, 'store'])->name('carts.store');

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'register'])->name('signup');

Route::get('/signin', [SigninController::class, 'index'])->name('signin');
Route::post('/signin', [SigninController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/manage-product', [ManageProductController::class, 'index']);
Route::delete('/delete-product/{id}', [ManageProductController::class, 'destroy'])->name('delete-product');

Route::get('/user-profile', [UserProfileController::class, 'index']);
Route::get('/edit-profile', [UserProfileController::class, 'edit']);

Route::get('/manage-user', [ManageUserController::class, 'index']);
Route::delete('/delete-user/{id}', [ManageUserController::class, 'destroy'])->name('delete-user');


Route::get('/add-product', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::get('/grid-view', [ProductGridController::class, 'index']);
Route::get('/list-view', [ProductListController::class, 'index']);

Route::get('/add-category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

Route::middleware(['auth'])->group(function () {
  Route::get('/add-cart', [CartController::class, 'index']);
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
});

Route::get('/product-detail', [ProductController::class, 'show']);

Route::get('/payment', [PaymentController::class, 'index']);

Route::get('/shipping', [ShippingController::class, 'index']);

Route::get('/cart-review', [ReviewCartController::class, 'index']);
Route::get('/checkout-detail', [CheckOutDetailController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::post('shipping-address/store', [ShippingAddressController::class, 'store'])->name('shipping_address.store');
});

Route::get('/checkout-complete', [CheckOutCompleteController::class, 'index']);

//Route::get('/manage-orders', [ManageOrderController::class, 'index']);

Route::get('/manage-orders', [ManageOrderController::class, 'allOrders'])->name('manage-orders');


