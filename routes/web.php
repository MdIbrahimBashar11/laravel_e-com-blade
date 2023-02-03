<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//     return view('user.index');
// });

// Route::get('/dashboard', function () {
//     return view('user.index');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/redirect', [UserController::class, 'redirect']);

//USER
Route::get('/', [UserController::class, 'defrentPD']);
Route::get('/pageProduct', [UserController::class, 'pageProduct']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/cart', [UserController::class, 'cart']);
Route::get('/add_cart/{id}', [UserController::class, 'add_cart']);
Route::get('/delete_cart/{id}', [UserController::class, 'delete_cart']);
Route::post('/contect', [UserController::class, 'contect_post']);
Route::get('/pd_details/{id}', [UserController::class, 'pd_details']);
Route::get('/order', [UserController::class, 'order']);

//ADMIN   //https://github.com/MdIbrahimBashar11
 Route::get('/products', [AdminController::class, 'products']);
 Route::get('/addpd', [AdminController::class, 'addpd']);
 Route::post('/addproduct', [AdminController::class, 'addproduct']);
 Route::get('/delete_pd/{id}', [AdminController::class, 'delete_pd']);
 Route::get('/message', [AdminController::class, 'message']);
//  Route::get('/all_msg/{id}', [AdminController::class, 'all_msg']);
 Route::get('/show_msg/{user_id}', [AdminController::class, 'show_msg']);
 Route::get('/update/{id}', [AdminController::class, 'update']);
 Route::post('/update_product/{id}', [AdminController::class, 'update_product']);
 