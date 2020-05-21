<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
      
        return view('page.feedback'); 
        
    }


    public function add(Request $request){

        $data = $request->only(['name', 'comment']);
        $time = date("d.m.y H:i" );
        $dataUp = 'Дата: '.  $time  . ' Имя: '. $data['name'] . ' Комментарий: '  . $data['comment'] .'\r\n';
        $file = base_path() . ('/storage/mydata/feedback.txt');
        file_put_contents($file, PHP_EOL . $dataUp, FILE_APPEND);
        return redirect(route('Feedback'));

    }
    
}
