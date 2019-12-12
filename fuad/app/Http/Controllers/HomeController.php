<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
         return view('profile');
    }
    public function update(Request $request)
    {
       
        echo "update";
        //  DB::table('users')->emal;
        // echo $user_type;
        // // return view('profile');
    }
}
