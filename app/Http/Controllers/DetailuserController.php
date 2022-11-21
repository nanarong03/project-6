<?php

namespace App\Http\Controllers;
use App\Models\Detailuser;
use Illuminate\Http\Request;

class DetailuserController extends Controller
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
        $detailuser = detailuser::all();
        return view('adminpage.detailuser.admindetailuser' , compact('detailuser'));
    }

    public function formadd()
    {
        //C1 ->Form
         return view('adminpage.detailuser.add');
    }

    public function create(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
            'detail'=> 'nullable',
            'image'=> 'nullable',
         ]);

         if($request->file('image')){

            $file = $request->file('image');
            $filename = date('YmdHi'). '_' .$file->getClientOriginalName();
            $file->move(public_path('detailuser'), $filename);

         }else{

            $filename =NULL;

         }

         Detailuser::create([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename,

         ]);

         return redirect()->route('adminpage.detailuser.admindetailuser');
    }

    public function add()
    {
        // return view('add');
         return view('adminpage.detailuser.add');
    }


    public function edit($id)
    {
        $detailuser = detailuser::find($id);
        return view('adminpage.detailuser.edit',compact('detailuser'));
    }

    public function update(Request $request, $id)
    {

        $product = detailuser::find($id);

        $request->validate([

            'name' => 'nullable',
            'detail' => 'nullable',

        ]);

        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('detailuser'), $filename );

        }else{

            $filename = $product->image;

        }

        $product->update([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.detailuser.admindetailuser');

    }

    public function delete($id){
        $detailuser= Detailuser::find($id);
        $detailuser->delete();
        return redirect()->route('adminpage.detailuser.admindetailuser');
    }
}
