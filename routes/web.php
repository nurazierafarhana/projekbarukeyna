<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// -------------------------
//       LANDING PAGE
// -------------------------
Route::get('/', function () {
    return view('landing');
});

// -------------------------
//       USER DASHBOARD
// -------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/sort/{category}', [DashboardController::class, 'filterByCategory']);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// -------------------------
//       ADMIN DASHBOARD
// -------------------------

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('menu', [MenuController::class, 'index'])->name('admin.menu.index');
    Route::post('menu', [MenuController::class, 'store'])->name('admin.menu.store');
});

// Route to show the form for adding a new menu item
Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');


Route::get('menus', [MenuController::class, 'getAllMenus']);

// Admin: Show the menu edit page
Route::get('/admin/menu/edit/{id}', [MenuController::class, 'edit'])->name('admin.menu.edit');

// Admin: Update the menu item
Route::post('/admin/menu/update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');

// Route for showing the edit page
Route::get('/admin/menu/edit/{id}', [MenuController::class, 'edit'])->name('admin.menu.edit');

Route::get('/admin/menu/search', [MenuController::class, 'search'])->name('admin.menu.search');

// Route for updating the menu item
Route::put('/admin/menu/update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');

//show menu detail
Route::get('admin/menu/{id}', [MenuController::class, 'show'])->name('admin.menu.show');


use App\Http\Controllers\AdminController;

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// -------------------------
//       AUTH ROUTES
// -------------------------
require __DIR__.'/auth.php';


use App\Http\Controllers\CartController;

Route::post('/order', [CartController::class, 'addToCart']);
Route::get('/cart-count', [CartController::class, 'cartCount']);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart', [CartController::class, 'addToCart']);


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/delete/{index}', [CartController::class, 'delete'])->name('cart.delete');

