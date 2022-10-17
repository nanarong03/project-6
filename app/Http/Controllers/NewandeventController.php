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

    public function addform(Request $request)
    {
        //C2 ->create
         $request ->validate([
            //'picture'=>null',
            'name'=> 'nullable',
            'detail'=> 'nullable',
            'image'=> 'nullable',
         ]);

         Newandevent::create($request->all());
         return redirect()->route('adminpage.newandevent.adminnewandevent');
    }

    public function add()
    {
        // return view('add');
         return view('adminpage.newandevent.add');
    }


    public function edit()
    {
        // return view('edit');
         return view('adminpage.newandevent.edit');
    }
}
