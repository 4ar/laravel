<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NewsController extends DataController
{
    public function news()
    {
        $html = "<h1>Новости</h1>";
        $html .= '<nav>';
        foreach ($this->category as $cat) {
            $html .= <<<php
            <a href="/news/{$cat['name']}/">{$cat['name']}</a>
            
        php;
        } /* end array */
        $html .= '</nav>';
        $html .= '<h4>Все записи:</h4>';
        foreach($this->news as $news){
            $html .= <<<php
            <h1>{$news['title']}</h1>
            <div>{$news['inform']}</div>
            <hr>
            php;
        }
        return $html;
    }
}
