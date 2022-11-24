<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\NewandeventController;
use App\Http\Controllers\DetailuserController;
use App\Http\Controllers\UserController;

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

Route::view('/','promotepage.home')->name('home');
Route::view('/house-blend', 'promotepage.house-blend')->name('house-blend');
Route::view('/products', 'promotepage.product',)->name('product');
Route::view('/teacher-single', 'promotepage.teacher-single',)->name('teacher-single');
Route::view('/about', 'promotepage.about',)->name('about');
Route::view('/contact', 'promotepage.contact',)->name('contact');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
// Route::get('/', [WelcomeController::class,'index'],)->name('welcome');

// Route::view('/',  [App\Http\Controllers\IndexController::class, 'index'])->name('promotepage.home');


//End Promote อาจารย์เดียร์//


//Start Admin//
Auth::routes();

Route::get('/admin/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');

//R product
Route::get('/admin/product',  [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');
//C product
Route::get('/admin/product/add',  [ProductController::class, 'formadd'])->name('adminpage.product.formadd');
Route::post('/admin/product/create',  [ProductController::class, 'create'])->name('adminpage.product.create');

//U product
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('adminpage.product.edit');
Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('adminpage.product.update');
Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->name('adminpage.product.delete');


//R typeproduct
Route::get('/admin/typeproduct',  [TypeProductController::class, 'index'])->name('adminpage.typeproduct.admintypeproduct');
//C typeproduct
Route::get('/admin/typeproduct/add',  [TypeProductController::class, 'formadd'])->name('adminpage.typeproduct.formadd');
Route::post('/admin/typeproduct/create',  [TypeProductController::class, 'create'])->name('adminpage.typeproduct.create');

//U typeproduct
Route::get('/admin/typeproduct/edit/{id}',  [TypeProductController::class, 'edit'])->name('adminpage.typeproduct.edit');
Route::post('/admin/typeproduct/update/{id}', [TypeProductController::class, 'update'])->name('adminpage.typeproduct.update');
Route::get('/admin/typeproduct/delete/{id}', [TypeProductController::class, 'delete'])->name('adminpage.typeproduct.delete');



//R newandevent
Route::get('/admin/newandevent',  [NewandeventController::class, 'index'])->name('adminpage.newandevent.adminnewandevent');
//C newandevent
Route::get('/admin/newandevent/add',  [NewandeventController::class, 'formadd'])->name('adminpage.newandevent.formadd');
Route::post('/admin/newandevent/create',  [NewandeventController::class, 'create'])->name('adminpage.newandevent.create');

//U newandevent
Route::get('/admin/newandevent/edit/{id}',  [NewandeventController::class, 'edit'])->name('adminpage.newandevent.edit');
Route::post('/admin/newandevent/update/{id}', [NewandeventController::class, 'update'])->name('adminpage.newandevent.update');
Route::get('/admin/newandevent/delete/{id}', [NewandeventController::class, 'delete'])->name('adminpage.newandevent.delete');


//R detailuser
Route::get('/admin/detailuser',  [DetailuserController::class, 'index'])->name('adminpage.detailuser.admindetailuser');
//C detailuser
Route::get('/admin/detailuser/add',  [DetailuserController::class, 'formadd'])->name('adminpage.detailuser.formadd');
Route::post('/admin/detailuser/create',  [DetailuserController::class, 'create'])->name('adminpage.detailuser.create');

//U detailuser
Route::get('/admin/detailuser/edit/{id}',  [DetailuserController::class, 'edit'])->name('adminpage.detailuser.edit');
Route::post('/admin/detailuser/update/{id}', [DetailuserController::class, 'update'])->name('adminpage.detailuser.update');
Route::get('/admin/detailuser/delete/{id}', [DetailuserController::class, 'delete'])->name('adminpage.detailuser.delete');



//R user
Route::get('/admin/user',  [UserController::class, 'index'])->name('adminpage.user.adminuser');
//C user
Route::get('/admin/user/add',  [UserController::class, 'formadd'])->name('adminpage.user.formadd');
Route::post('/admin/user/create',  [UserController::class, 'create'])->name('adminpage.user.create');

//U user
Route::get('/admin/user/edit/{id}',  [UserController::class, 'edit'])->name('adminpage.user.edit');
Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('adminpage.user.update');
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('adminpage.user.delete');



//End Admin//







