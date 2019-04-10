<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
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
    public function contact()
    {
        return view('contact');
    }
    function store(Request $request) {

        $name=$request -> Name;

        return redirect()->route('thanks',['name' => $name]);
    }
    function thanks($name){
        return view ('thankyou')->with(compact('name'));
    }
}
