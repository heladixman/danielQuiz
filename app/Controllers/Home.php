<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Quiz Daniel',
            'content' => 'pages/dashboard'
        ];
        echo view('components/componentsWrapper', $data);
    }
}
