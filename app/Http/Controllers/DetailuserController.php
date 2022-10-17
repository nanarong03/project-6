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

    public function addform(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
            'detail'=> 'nullable',
            'image'=> 'nullable',
         ]);

         Detailuser::create($request->all());
         return redirect()->route('adminpage.detailuser.admindetailuser');
    }

    public function add()
    {
        // return view('add');
         return view('adminpage.detailuser.add');
    }


    public function edit()
    {
        // return view('edit');
         return view('adminpage.detailuser.edit');
    }
}
