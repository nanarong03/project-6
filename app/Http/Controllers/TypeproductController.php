<?php

namespace App\Http\Controllers;
use App\Models\TypeProducts;
use Illuminate\Http\Request;

class TypeproductController extends Controller
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
        $TypeProducts = TypeProducts::all();
         return view('adminpage.typeproduct.admintypeproduct');
    }


    public function formadd()
    {
        //C1 ->Form
         return view('admin.typeproduct.add');
    }


    public function addform(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
            'iamge'=> 'nullable',
         ]);
         TypeProducts::create($request->all());

         return redirect()->route('adminpage.typeproduct.adminproduct');
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
