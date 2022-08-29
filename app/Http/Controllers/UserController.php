<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $read = User::all();

        // return view('home');
         return view('adminpage.user.adminuser' , compact('read'));
    }


    public function add()
    {
        $read = User::all();

        // return view('add');
         return view('adminpage.user.add' , compact('read'));
    }


    public function edit()
    {
        $read = User::all();

        // return view('edit');
         return view('adminpage.user.edit' , compact('read'));
    }
}
