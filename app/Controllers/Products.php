<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public function index()
    {
        $data = [
            'Title' => 'Compulsão de Hamburguer'
        ];

        // index
        return view ('products/index', $data);
    }

}
