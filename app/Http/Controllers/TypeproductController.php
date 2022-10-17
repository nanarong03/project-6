<?php

namespace App\Http\Controllers;
use App\Models\Typeproduct;
use Illuminate\Http\Request;

class TypeProductController extends Controller
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
       $Typeproduct = Typeproduct::all();
       return view('adminpage.typeproduct.admintypeproduct' , compact('Typeproduct'));
    }

    public function formadd()
    {
        //C1 ->Form
         return view('adminpage.typeproduct.add');
    }

    public function addform(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
            'image'=> 'nullable',
         ]);

         Typeproduct::create($request->all());
         return redirect()->route('adminpage.typeproduct.admintypeproduct');
    }

    public function add()
    {
        // return view('add');
         return view('adminpage.typeproduct.add');
    }


    public function edit()
    {
        // return view('edit');
         return view('adminpage.typeproduct.edit');
    }
}

