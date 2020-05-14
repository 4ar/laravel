<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCatController extends DataController
{
    public function cat($name)
    { 
        $id_cat =  $this->getCatByID($name);
        $html = "<h1>$name</h1>";
        foreach($this->news as $news){
            if($id_cat ==  $news['parant_cat']) {
                $html .= <<<php
                <h1>{$news['title']}</h1>
                <div>{$news['inform']}</div>
                <a href="/news/{$name}/{$news['id']}/">Подробнее</a>
                <hr>
                php;
            }
        }
        $html .= '<a href="/news/">Назад</a>';
        return $html;
    }
    
    private function getCatByID($name)
    {
    
        foreach($this->category as $category){
            if ($category['name'] == $name){
                $id_cat = $category['id'];
                return $id_cat;
            
            }
        }
        return [];
    }
}
