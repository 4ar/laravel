<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        
        $hello = 'Access point Admin';
        return view('admin.admin', 
        [
            'hello' => $hello
        ]); 
    }

    public function newsAdd(Request $request) {
      
        return redirect()->route('admin');

    }


}
