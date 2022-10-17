<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

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
        //R read
        $user = user::all();
        return view('adminpage.user.adminuser' , compact('user'));
    }

    public function formadd()
    {
        //C1 ->Form
         return view('adminpage.user.add');
    }


    public function addform(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'username'=> 'nullable',
            'email'=> 'nullable',
         ]);

         User::create($request->all());
         return redirect()->route('adminpage.user.adminuser');
    }
    

    public function add()
    {
        // return view('add');
         return view('adminpage.user.add' );
    }


    public function edit()
    {
        // return view('edit');
         return view('adminpage.user.edit');
    }
}
