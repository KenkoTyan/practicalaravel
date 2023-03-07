<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('adminform');
    }

    public function create(Request $req)
    {
        $product = new Product();
        //$product -> name = $req  -> id;
        $product -> category_id = $req  -> category_id;
        $product -> name = $req  -> name;
        $product -> price = $req -> price;
        $product -> prod_country = $req  -> prod_country;
        $product -> prod_year = $req  -> prod_year;
        $product -> prod_model = $req -> prod_model;
        $product -> amount = $req  -> amount;
        $product -> thumbnail = $req -> thumbnail;
        $product -> save();
        return redirect()->route('catalog');
    }

}
