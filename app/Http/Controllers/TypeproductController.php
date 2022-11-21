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

    public function create(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
         ]);

         if($request->file('image')){

            $file = $request->file('image');
            $filename = date('YmdHi'). '_' .$file->getClientOriginalName();
            $file->move(public_path('typeproduct'), $filename);

         }else{

            $filename =NULL;

         }

         Typeproduct::create([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename,

         ]);



         return redirect()->route('adminpage.typeproduct.admintypeproduct');
    }

    public function add()
    {
        // return view('add');
         return view('adminpage.typeproduct.add');
    }


    public function edit($id)
    {
        $Typeproduct = Typeproduct::find($id);
        return view('adminpage.typeproduct.edit',compact('Typeproduct'));
    }


    public function update(Request $request, $id)
    {

        $product = Typeproduct::find($id);

        $request->validate([

            'name' => 'nullable',
            'detail' => 'nullable',

        ]);

        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('typeproduct'), $filename );

        }else{

            $filename = $product->image;

        }

        $product->update([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.typeproduct.admintypeproduct');

    }

    public function delete($id){
        $Typeproduct= Typeproduct::find($id);
        $Typeproduct->delete();
        return redirect()->route('adminpage.typeproduct.admintypeproduct');
    }
}

