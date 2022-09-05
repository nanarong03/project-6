<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products = Products::all();
         return view('adminpage.product.adminproduct', compact('products'));
    }


    public function formadd()
    {
        //C1 ->Form
         return view('adminpage.product.add');
    }


    public function addform(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
            'detail'=> 'nullable',
            'price'=> 'nullable',
            'image'=> 'nullable',
         ]);

         products::create($request->all());

         return redirect()->route('adminpage.product.adminproduct');
    }
    
    
    public function add()
    {
          // return view('add');
         return view('adminpage.product.add');
    }


    public function edit()
    {
          // return view('edit');
         return view('adminpage.product.edit');
    }
}
