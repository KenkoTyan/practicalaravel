<?php
//!!!!!!!!!!
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
    public function index()
    {
        
        /*$showCategories = Category::all();
        return view('layouts.catalog', ["categories"=>$showCategories]);*/

        /* хелпер дает возможность просмотреть массив коллекции? */
        //dd($showProducts);
        //продукт

        //передается коллекция Продуктов, $showproducts -> атрибут
        $showproducts=\App\Models\Product::all();
        //dd($showproducts);
        return view("layouts.catalog", ["products"=>$showproducts]);
        
    }
    public function cat()
    {
        
        return view("layouts.product");
        //dd($product);
    }
    public function catid($cid)
    {
        /*$getOneProduct=Product::find($id);
        dd($getOneProduct);
        return view("layouts.product");*/
        $getOneProduct=Product::find($cid);
        //dd($getOneProduct);
        return view("layouts.product",["showProduct"=>$getOneProduct]);
        
    }
    public function showProduct($id)
    {
        $getOneProduct=Category::find($id);
        //$getOneProduct=Product::find($id);
        //dd($getOneProduct);
        return view("layouts.product", ["product"=>$getOneProduct]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
