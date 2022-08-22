<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');    
// });

//Start Admin//

Auth::routes();

Route::get('/admin/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');

Route::get('/admin/product',  [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.adminproduct');

Route::get('/admin/typeproduct',  [App\Http\Controllers\TypeproductController::class, 'index'])->name('adminpage.admintypeproduct');

Route::get('/admin/newandevent',  [App\Http\Controllers\NewandeventController::class, 'index'])->name('adminpage.adminnewandevent');

Route::get('/admin/detailuser',  [App\Http\Controllers\DetailuserController::class, 'index'])->name('adminpage.admindetailuser');

Route::get('/admin/user',  [App\Http\Controllers\UserController::class, 'index'])->name('adminpage.adminuser');


//End Admin//




//Start Promote อาจารย์เดียร์//
Route::view('/', 'promotepage.home')->name('home');
Route::view('/house-blend', 'promotepage.house-blend')->name('house-blend');





//End Promote อาจารย์เดียร์//


