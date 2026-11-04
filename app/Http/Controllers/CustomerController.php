<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
      public function index(){
        $customers = Customer::all();
        return view("customers.index", ["customers" => $customers]);
    }
    public function detail(){
        echo "test";
    }
    public function create(){
        return view("customers.create");
    }
    public function store(Request $request){
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
        ]);
        return redirect()->route("customers");
    }
}


