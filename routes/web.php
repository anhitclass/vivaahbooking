<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','verified'])->name('home');

Route::middleware(['auth'])->group(function () {
    
    // User Routes
    Route::get('/userchoose', [UserController::class, 'ChooseUser'])->name('chooseuser');
    Route::get('/all_vendors/{id}', [UserController::class, 'VendorsGet'])->name('VendorsGet');
    Route::get('/vendorpost/{id}', [UserController::class, 'VendorPost'])->name('VendorPost');
    Route::get('/services', [UserController::class, 'services'])->name('services');
    Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
    Route::get('/contactus', [UserController::class, 'contactus'])->name('contactus');

    // Vendor Routes
    Route::get('/vendor_login', [VendorController::class, 'LoginVendor'])->name('login_vendor');
    Route::post('/login_store', [VendorController::class, 'store'])->name('login_store');
    Route::get('/create_vendor', [VendorController::class, 'CreateVendor'])->name('create_vendor');
    Route::post('/store_vendor', [VendorController::class, 'StoreVendor'])->name('store_vendor');
    Route::get('/dashboard', [VendorController::class, 'dashboard'])->name('dashboard');

    // Posts Routes
    Route::get('/create_post', [PostController::class, 'CreatePost'])->name('create_post');
    Route::post('/store_post', [PostController::class, 'StorePost'])->name('store_post');
    Route::get('/subcategories', [PostController::class, 'getSubcategories'])->name('subcategories_data');
});
