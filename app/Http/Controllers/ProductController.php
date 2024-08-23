<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() 
    {
        //
    }

    public function index()
    {
        $this->resetSessionSearch('product.index');
        return view('products.index');
    }
}
