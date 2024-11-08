<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function showFormBook()
    {
        $fields = [
            [
                'label' => 'Название книги',
                'name' => 'title',
            ],
            [
                'label' => 'Автор книги',
                'name' => 'author',
            ],
            [
                'label' => 'Жанр книги',
                'name' => 'genre',
            ],
            [
                'label' => 'Издатель',
                'name' => 'publisher',
            ],
            
        ];
    
        return view('pages.library-man.library_control', compact('fields'));
    }
}
