<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

// =============================================================
// AUTH & LOGIN
// =============================================================
// Authentication
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.submit');
    Route::post('/logout', 'logout')->name('logout');

    // Password Reset
    Route::get('/forgot-password', 'showForgotPasswordForm')->name('password.request');
    Route::post('/forgot-password', 'sendResetLinkEmail')->name('password.email');
    Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('/reset-password', 'reset')->name('password.update');
});

// Registration
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::post('/register', 'register')->name('register.submit');
});



// =============================================================
// PUBLIC PAGES
// =============================================================
Route::get('/', fn() => view('pages.index'));
Route::get('/about',[PageController::class, 'about']);
Route::get('/customisation', [PageController::class, 'customisation']);
Route::get('/customer-service',[PageController::class, 'customerService']);
Route::match(['get', 'post'], '/contact', [ContactController::class, 'contact'])->name('contact');




// =============================================================
// COLLECTION PAGES
// =============================================================
Route::prefix('collection')->name('collection.')->group(function () {
    Route::get('/sofas', [ProductController::class, 'sofas'])->name('sofas');
    Route::get('/tables', [ProductController::class, 'tables'])->name('tables');
    Route::get('/chairs', [ProductController::class, 'chairs'])->name('chairs');
    Route::get('/wardrobes', [ProductController::class, 'wardrobe'])->name('wardrobe');
    Route::get('/tvunit', [ProductController::class, 'tvunit'])->name('tvunit');
    Route::get('/office-furniture', [ProductController::class, 'officeFurniture'])->name('collection.office-furniture');
    Route::get('/beds', [ProductController::class, 'beds'])->name('collection.beds');
    Route::get('/bookshelf', [ProductController::class, 'bookshelf'])->name('collection.bookshelf');
    Route::get('/product/{slug}', [ProductController::class, 'show'])->name('products.show');
});


// =============================================================
//  CART ROUTES 
// =============================================================
Route::middleware('auth')->group(function () {
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'show'])->name('index');
        Route::post('/add', [CartController::class, 'add'])->name('add');
        Route::get('/remove/{id}', [CartController::class, 'remove'])->name('remove');
        Route::get('/clear', [CartController::class, 'clear'])->name('clear');
        Route::get('/qty/{id}/{action}', [CartController::class, 'updateQuantity'])->name('qty');
    });
});

// User bina login ho to Add to Cart pe login page dikhe
Route::post('/add-to-cart', function () {
    return redirect()->route('login')->with('error', 'Please login to add items to cart.');
})->name('cart.guest');


// =============================================================
// USER LOGGED IN PANEL
// =============================================================
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    // Profile
    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile');
    Route::post('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [UserProfileController::class, 'updatePassword'])->name('profile.password');


    // Orders
    Route::get('/orders', [UserProfileController::class, 'orders'])->name('orders');
    Route::get('/order-details', [UserProfileController::class, 'orderDetails'])->name('order-details');
    Route::get('/user/order-details/{id}', [OrderController::class, 'show'])->name('user.order-details');

    // Product categories

});
