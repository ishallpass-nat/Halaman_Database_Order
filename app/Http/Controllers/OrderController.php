<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
      public function index(){
      $orders =[[
            "order" => "001",
            "nama" => "budi",
            "price" => 14000,
        ],[
            "order" => "002",
            "nama" => "herman",
            "price" => 16000,
        ],[
            "order" => "003",
            "nama" => "wilson",
            "price" => 17000,
        ],[
            "order" => "004",
            "nama" => "freddy",
            "price" => 15000,
        ]    
    ];
    return view("orders.index", ["orders" => $orders]);
    }
    public function detail(){
        echo "test";
    }
}


