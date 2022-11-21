<?php

namespace App\Http\Controllers;
use App\Models\Products;
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
       return view('adminpage.product.adminproduct' , compact('products'));
    //    dd($products);
    }

    public function formadd()
    {
        //C1 ->Form
         return view('adminpage.product.add');
    }


    public function create(Request $request)
    {
        //C2 ->create
         $request ->validate([

            'name'=> 'nullable',
            'detail'=> 'nullable',
            'price'=> 'nullable',

         ]);

         if($request->file('image')){

            $file = $request->file('image');
            $filename = date('YmdHi'). '_' .$file->getClientOriginalName();
            $file->move(public_path('product'), $filename);

         }else{

            $filename =NULL;

         }

         Products::create([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename,

         ]);

         return redirect()->route('adminpage.product.adminproduct');
    }
    
    
    public function add()
    {
          // return view('add');
         return view('adminpage.product.add');
    }


    public function edit($id)
    {
        $products = Products::find($id);
        return view('adminpage.product.edit',compact('products'));
    }


    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->name = $request->name;
        $products->detail = $request->detail;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->save();
        return redirect()->route('adminpage.product.adminproduct');
    }

    public function delete($id){ 
        $products= Products::find($id);
        $products->delete();
        return redirect()->route('adminpage.product.adminproduct');
    }
}

