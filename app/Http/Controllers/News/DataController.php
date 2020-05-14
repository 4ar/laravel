<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
         public $category = [
               [
                   'id' => '1',
                   'name' => 'Category1'
               ],
               [
                    'id' => '2',
                    'name' => 'Category2'
                ],
                [
                    'id' => '3',
                    'name' => 'Category3'
                ],
                [
                    'id' => '4',
                    'name' => 'Category4'
                ]
                ,
                [
                    'id' => '5',
                    'name' => 'Category5'
                ]
        ];
        
        
            public $news = [
                [
                    'id' => '1',
                    'title' => 'Новость 1-1',
                    'inform'  => 'Новость 1 тут о ней подробно',
                    'parant_cat' => '1'
                ],
                [
                   'id' => '2',
                   'title' => 'Новость 2-1',
                   'inform'  => 'Новость 2 тут о ней подробно',
                   'parant_cat' => '1'
                ],
                [
                    'id' => '3',
                    'title' => 'Новость 3-1',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '1'
                 ],
                 [
                    'id' => '4',
                    'title' => 'Новость 4-1',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '1'
                 ],
                 [
                    'id' => '5',
                    'title' => 'Новость 1-2',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '2'
                 ],
                 [
                    'id' => '6',
                    'title' => 'Новость 2-2',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '2'
                 ],
                 [
                    'id' => '7',
                    'title' => 'Новость 3-2',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '2'
                 ],
                 [
                    'id' => '8',
                    'title' => 'Новость 4-2',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '2'
                 ],
                 [
                    'id' => '9',
                    'title' => 'Новость 1-3',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '3'
                 ],
                 [
                    'id' => '10',
                    'title' => 'Новость 2-3',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '3'
                 ],
                 [
                    'id' => '11',
                    'title' => 'Новость 3-3',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '3'
                 ],
                 [
                    'id' => '12',
                    'title' => 'Новость 4-3',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '3'
                 ],
                 [
                    'id' => '13',
                    'title' => 'Новость 1-3',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '4'
                 ],
                 [
                    'id' => '14',
                    'title' => 'Новость 2-4',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '4'
                 ],
                 [
                    'id' => '15',
                    'title' => 'Новость 3-4',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '4'
                 ],
                 [
                    'id' => '16',
                    'title' => 'Новость 4-4',
                    'inform'  => 'Новость 3 тут о ней подробно',
                    'parant_cat' => '4'
                 ],
            ];
    
}
