<?php

namespace App\Http\Controllers;

use App\Models\Detailuser;
use App\Models\Newandevent;
use App\Models\Products;
use App\Models\Typeproduct;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // /
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */

    // /
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function index()
    {
        $detailuser = detailuser::all();
        $newandevent = newandevent::all();
        $products = Products::all();
        $Typeproduct = Typeproduct::all();
        $user = User::all();
        // return view('home');
        return view('promotepage.home', compact('detailuser','newandevent','products','Typeproduct','user'));
    }
}
