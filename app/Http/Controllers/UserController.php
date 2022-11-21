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
        $user = User::all();
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


    public function edit($id)
    {
        $user = User::find($id);
        return view('adminpage.user.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('adminpage.user.adminuser');
    }

    public function delete($id){ 
        $user= User::find($id);
        $user->delete();
        return redirect()->route('adminpage.user.adminuser');
    }
}
