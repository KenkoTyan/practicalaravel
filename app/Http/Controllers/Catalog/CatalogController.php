<?php
namespace App\Http\Controllers\Catalog;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function filterProduct(Request $request)
    {
        if($request->cat_id == 0)
        {
            $products = Product::all();
        } else {
            $products = Product::where('category_id', $request->cat_id)->get();
        }
        
        $categories = Category::all();
       
        return view('layouts.catalog', ['products'=>$products, 'categories'=> $categories]);
    }

    public function showProduct($id)
    {
        $getOneProduct=Product::find($id);
        return view("layouts.product",["showProduct"=>$getOneProduct]); 
    }

    public function sortProduct()
    {
        //
    }

}
