<?php

namespace App\Http\Controllers;
use App\Models\Newandevent;
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
        //R read
       $newandevent = newandevent::all();
       return view('adminpage.newandevent.adminnewandevent' , compact('newandevent'));
    }

    public function formadd()
    {
        //C1 ->Form
         return view('adminpage.newandevent.add');
    }

    public function create(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
            'detail'=> 'nullable',
         ]);

         if($request->file('image')){

            $file = $request->file('image');
            $filename = date('YmdHi'). '_' .$file->getClientOriginalName();
            $file->move(public_path('newandevent'), $filename);

         }else{

            $filename =NULL;

         }

         Newandevent::create([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename,

         ]);

         return redirect()->route('adminpage.newandevent.adminnewandevent');
    }

    public function add()
    {
        // return view('add');
         return view('adminpage.newandevent.add');
    }


    public function edit($id)
    {
        $newandevent = Newandevent::find($id);
        return view('adminpage.newandevent.edit',compact('newandevent'));
    }

    public function update(Request $request, $id)
    {

        $product = Newandevent::find($id);

        $request->validate([

            'name' => 'nullable',
            'detail' => 'nullable',

        ]);

        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('newandevent'), $filename );

        }else{

            $filename = $product->image;

        }

        $product->update([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.newandevent.adminnewandevent');

    }

    public function delete($id){
        $newandevent= Newandevent::find($id);
        $newandevent->delete();
        return redirect()->route('adminpage.newandevent.adminnewandevent');
    }
}
