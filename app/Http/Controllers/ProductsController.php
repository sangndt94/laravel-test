<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "laravel course";
        $name = 'sang';
        // return view('products.index',compact('title','name')); // cach truyền nhiều dữ liệu
        // return view('products.index')->with('title',$title);// cach truyền 1 dữ liệu
        // $arr = [ 'name' => 'sang'];
        $arr = [1, 2, 3, 4];
        return view('products.index', compact('arr', 'arr'));
    }
    public function detail($productName, $id)
    {
        // return view('products.index', [
        //     'product' => [
        //         'name' => 'iphone 15',
        //         'year' => 2022
        //     ]
        // ]);
        return view('products.index', [
            'product' => [
                'name' => 'iphone 15',
                'year' => 2022
            ]
        ]);
    }
}
