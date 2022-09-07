<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewandeventController extends Controller
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
        // return view('home');
         return view('adminpage.newandevent.adminnewandevent');
    }


    public function add()
    {
        // return view('add');
         return view('adminpage.newandevent.add');
    }


    public function edit()
    {
        // return view('edit');
         return view('adminpage.newandevent.edit');
    }
}
