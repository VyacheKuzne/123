<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserCatalogCotroller extends Controller
{
    public function showCatalog()
    {
    
        $genres = [
            [
                'label' => 'Фантастика',
                
            ],
            [
                'label' => 'Приключения',
           
            ],
            [
                'label' => 'Мистика',
              
            ],
            [
                'label' => 'Антиутопия',
              
            ],
            [
                'label' => 'Романтика',
              
            ],
            [
                'label' => 'Трагедия',
              
            ],
            [
                'label' => 'Рассказ',
              
            ],
            [
                'label' => 'Драма',
              
            ],
            
           
        ];
        $books = [
            [
                'title' => 'Гамлет Макбет',
                'author' => 'Уильям Шекспир',
                'rating' => 5.0,
                'genre' => 'Трагедия',
            ],
            [
                'title' => '1984',
                'author' => 'Джордж Оруэлл',
                'rating' => 4.5,
                'genre' => 'Антиутопия',
            ],
            [
                'title' => 'Мастер и Маргарита',
                'author' => 'Михаил Булгаков',
                'rating' => 4.8,
                'genre' => 'Фантастика',
            ],
        ];
return view('pages.catalog', compact('genres', 'books'));
        }
}
