<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
     public function view($page = 'home')
     {
        $data['title']= 'NTH - 2166 2006';
        return view('templates/header', $data)
            .view('page/'.$page,$data)
            .view('templates/footer');

     }
}
