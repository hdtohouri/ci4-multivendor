<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        //
        return view('admin/home');
       /* $nom = 'henockii';
        $test = password_hash($nom, PASSWORD_DEFAULT);
        return $test;*/
    }
}
