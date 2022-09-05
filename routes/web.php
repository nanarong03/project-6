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


//Start Promote อาจารย์เดียร์//

Route::view('/', 'promotepage.home')->name('home');
Route::view('/house-blend', 'promotepage.house-blend')->name('house-blend');
Route::view('/product', 'promotepage.product',)->name('product');
Route::view('/teacher-single', 'promotepage.teacher-single',)->name('teacher-single');
Route::view('/about', 'promotepage.about',)->name('about');
Route::view('/contact', 'promotepage.contact',)->name('contact');

//End Promote อาจารย์เดียร์//


//Start Admin//

Auth::routes();

Route::get('/admin/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');
//R product
Route::get('/admin/product',  [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');
//C product
Route::get('/admin/product/add',  [App\Http\Controllers\ProductController::class, 'formadd'])->name('adminpage.product.formadd');

Route::post('/admin/product/add',  [App\Http\Controllers\ProductController::class, 'addform'])->name('adminpage.product.add');
Route::get('/admin/product/edit',  [App\Http\Controllers\ProductController::class, 'edit'])->name('adminpage.product.edit');


//R typeproduct
Route::get('/admin/typeproduct',  [App\Http\Controllers\TypeproductController::class, 'index'])->name('adminpage.typeproduct.admintypeproduct');
//C typeproduct
Route::get('/admin/typeproduct/add',  [App\Http\Controllers\TypeproductController::class, 'formadd'])->name('adminpage.typeproduct.formadd');

Route::post('/admin/product/add',  [App\Http\Controllers\ProductController::class, 'addform'])->name('adminpage.typeproduct.add');
Route::get('/admin/typeproduct/edit',  [App\Http\Controllers\TypeproductController::class, 'edit'])->name('adminpage.typeproduct.edit');

Route::get('/admin/newandevent',  [App\Http\Controllers\NewandeventController::class, 'index'])->name('adminpage.newandevent.adminnewandevent');
Route::get('/admin/newandevent/add',  [App\Http\Controllers\NewandeventController::class, 'add'])->name('adminpage.newandevent.add');
Route::get('/admin/newandevent/edit',  [App\Http\Controllers\NewandeventController::class, 'edit'])->name('adminpage.newandevent.edit');

Route::get('/admin/detailuser',  [App\Http\Controllers\DetailuserController::class, 'index'])->name('adminpage.detailuser.admindetailuser');
Route::get('/admin/detailuser/add',  [App\Http\Controllers\DetailuserController::class, 'add'])->name('adminpage.detailuser.add');
Route::get('/admin/detailuser/edit',  [App\Http\Controllers\DetailuserController::class, 'edit'])->name('adminpage.detailuser.edit');

Route::get('/admin/user',  [App\Http\Controllers\UserController::class, 'index'])->name('adminpage.user.adminuser');
Route::get('/admin/user/add',  [App\Http\Controllers\UserController::class, 'add'])->name('adminpage.user.add');
Route::get('/admin/user/edit',  [App\Http\Controllers\UserController::class, 'edit'])->name('adminpage.user.edit');


//End Admin//







