<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductsModel;

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

    public function add_product()
    {
        return view('admin/admin_add_product');
    }


    public function products()
    {
        $productModel = new ProductsModel();

        $test = $productModel->get()->getResultArray();
        print_r($test);

        return view('products');
    }
}
