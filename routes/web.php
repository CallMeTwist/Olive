<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WebsiteController::class, 'index'])->name('welcome');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

// Store
Route::prefix('store')->name('store.')->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('index');
    Route::get('/{product:slug}', [StoreController::class, 'show'])->name('product.show');
});

// Cart Routes
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/add/{product}', [CartController::class, 'add'])->name('add');
    Route::patch('/update/{cartKey}', [CartController::class, 'update'])->name('update'); // ✅ ADD THIS
    Route::delete('/remove/{cartKey}', [CartController::class, 'remove'])->name('remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('clear');
});

Route::get('/checkout', [CheckoutController::class, 'redirectToWhatsApp'])->name('checkout.whatsapp');


Route::get('/test-session', function() {
    // Set a test value
    session()->put('test', 'Session is working!');
    session()->save();

    // Get the value
    $test = session()->get('test');

    // Check cart
    $cart = session()->get('cart.items', []);

    return response()->json([
        'test_value' => $test,
        'cart_items' => $cart,
        'all_session' => session()->all(),
        'session_id' => session()->getId(),
    ]);
});

