<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $nextProducts = Product::orderBy('id','desc')->limit(5)->get();
        //dd($nextProducts);
        return view("layouts.about",["sliderProducts"=>$nextProducts]);
    }

}
