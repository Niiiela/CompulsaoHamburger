<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'Title' => 'Compulsão de Hamburguer'
        ];

        // index
        return view ('home/index', $data);
    }

}
