<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class About_the_Company extends BaseController
{
    public function index()
    {
        $data = [
            'Title' => 'Compulsão de Hamburguer'
        ];

        // index
        return view ('about_the_Company/index', $data);
    }

}
