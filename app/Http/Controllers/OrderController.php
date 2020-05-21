<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
      
        return view('page.order'); 
        
    }


    public function add(Request $request){
        $request->flash();
        $data = $request->only(['name', 'tel', 'email', 'info']);
        $time = date("d.m.y H:i" );
        $dataUp = 'Дата: '.  $time  . ' Имя: '. $data['name'] . ' Телефон: '  . $data['tel'] . ' email: ' . $data['email'] . ' Информация: ' .  $data['info'] .           '\r\n';
        $file = base_path() . ('/storage/mydata/order.txt');
        file_put_contents($file, PHP_EOL . $dataUp, FILE_APPEND);
        return redirect(route('Order'));

    }
}
