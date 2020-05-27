<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NewsController extends DataController
{
    public function news()
    {
         $news = \DB::select('SELECT id, title, inform, is_private FROM news');

         return view('news.news', [
             'news' => $news,
         ]);
    }
}
