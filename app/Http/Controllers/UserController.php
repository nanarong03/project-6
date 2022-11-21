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

        $product = User::find($id);

        $request->validate([

            'name' => 'nullable',
            'detail' => 'nullable',

        ]);

        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('user'), $filename );

        }else{

            $filename = $product->image;

        }

        $product->update([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.user.adminuser');

    }
    public function delete($id){
        $user= User::find($id);
        $user->delete();
        return redirect()->route('adminpage.user.adminuser');
    }
}
