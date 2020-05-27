<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsOneController extends DataController
{
    public function newsOne($id)
    {
        $news = \DB::select('SELECT id, title, inform, is_private FROM news WHERE id =:id',
                ['id' => $id]
        );

        return view('news.oneNews', [

                'news' => $news[0],
        ]);
    
    }
}
