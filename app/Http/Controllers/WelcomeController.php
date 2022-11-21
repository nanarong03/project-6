<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome')
        ->with('product',Product::all())
        ->with('typeproduct',TypeProduct::all())
        ->with('newandevent',Newandevent::all())
        ->with('detailuser',Detailuser::all())
        ->with('user',User::all())
    }
}
