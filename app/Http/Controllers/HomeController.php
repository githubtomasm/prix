<?php

<<<<<<< HEAD
namespace App\Http\Controllers;
=======
namespace Prix\Http\Controllers;
>>>>>>> 0baf3498cc5b6b386301f321a4bc41dc158f4f67

use Illuminate\Http\Request;

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
}
