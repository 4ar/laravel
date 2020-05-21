<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
   /**
    * public function __construct()
    *{
    *    $this->middleware('auth');
    *}
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    
    public function education()
    {
        return view('page.education');
    }

    public function experience()
    {
        return view('page.experience');
    }

    public function interests()
    {
        return view('page.interests');
    }

    public function skills()
    {
        return view('page.skills');
    }

    public function awards()
    {
        return view('page.awards');
    }
}
