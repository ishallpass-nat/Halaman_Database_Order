<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
      public function index(){
      $products =[[
            "product" => "samsung",
            "price" => "2000000",
            "stock" => 12,
        ],[
            "product" => "iphone",
            "price" => "450000",
            "stock" => 23,
        ],[
            "product" => "blackberry",
            "price" => "245000",
            "stock" => 22,
        ],
    ];
    return view("products.index", ["products" => $products]);
    }
    public function detail(){
        echo "test";
    }
}


