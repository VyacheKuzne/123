<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showForm()
    {
        $fields = [
            [
                'label' => 'ФИО',
                'name' => 'fio',
            ],
            [
                'label' => 'Номер телефона',
                'name' => 'phone',
            ],
            [
                'label' => 'Почта',
                'name' => 'email',
            ],
            [
                'label' => 'Пароль',
                'name' => 'password',
            ],
            
        ];
    
        return view('pages.admin.user_control', compact('fields'));
    }
}
