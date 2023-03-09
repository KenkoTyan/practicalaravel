<?php
namespace App\Http\Controllers\Catalog;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filterProduct(Request $request)
    {
        //фильтрация по категориям
        if($request->cat_id == 0)
        {
            $products = Product::orderBy('id','desc')->get();
        } else {
            $products = Product::where('category_id', $request->cat_id)->orderBy('id','desc')->get();
        }
        
        $categories = Category::all();
        
        return view('layouts.catalog', ['products'=>$products, 'categories'=> $categories]);
    }

    public function sortPriceProduct(Request $request)
    {
        if($request->priceproduct == 0){
            $products = Product::orderBy('id','desc')->get();
        } elseif ($request->priceproduct == "min"){
            $products= Product::orderBy('price')->get();
        } elseif($request->priceproduct == "max"){
            $products= Product::orderBy('price','desc')->get();
        }
        $categories = Category::all();
        
        return view('layouts.catalog', ['products'=>$products, 'categories'=> $categories]);
    }

    public function showProduct($id)
    {
        //передаем id продукта
        $getOneProduct=Product::find($id);
        //dd($getOneProduct);
        return view("layouts.product",["showProduct"=>$getOneProduct]); 
    }

    /*public function sortProduct(Request $request)
    {
        if($request->priceproduct == 0){
            $products = Product::all();
        } elseif ($request->priceproduct == "min"){
            $products= Product::orderBy('price')->get();
        } elseif($request->priceproduct == "max"){
            $products= Product::orderBy('price','desc')->get();
        }
        $categories = Category::all();
        
        return view('layouts.catalog', ['products'=>$products, 'categories'=> $categories]);
    }*/

    public function index(){
        
    }
}
