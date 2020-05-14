<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsOneController extends DataController
{
    public function newsOne($name,$id)
    {
        $news = $this->getNewsByID($id);
           
        if(!empty($news)) {
            $html = <<<php
            <h1>{$news['title']}</h1>
            <div>{$news['inform']}</div>
            <hr>
            <a href="/news/">Назад</a>
            php;
    
            return $html;
        }
    
       return redirect('/news');
    
    }
    
    private function getNewsByID($id)
    {
        foreach ($this->news as $news) {
            if ($news['id'] == $id){
                return $news;
            }
        } /* end foreach */
    
        return [];
    
    }
}
