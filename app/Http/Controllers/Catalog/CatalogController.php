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
    /*public function index()
    {
        //передается коллекция Продуктов, $showproducts -> атрибут
        $showproducts=\App\Models\Product::orderBy('id','desc')->get();
        //dd($showproducts);
        return view("layouts.catalog", ["products"=>$showproducts]);
        
    }*/

    //объект запрса параметром действия исп контроль типов
    public function filterProduct(Request $request)
    {
        if($request->caty_id == 0)
        {
            $products = Product::all();
        } else {
            $products = Product::where('category_id', $request->cat_id)->get(); //кат тов?
        }
        //$products=\App\Models\Product::orderBy('id','desc')->get();
        dd($poducts);
        $categories = Category::all();
        //dd($categories);
        return view('layouts.catalog', ['products'=>$products, 'categories'=> $categories]);
    }

    public function showProduct($id)
    {
        //передаем id продукта
        $getOneProduct=Product::find($id);
        //dd($getOneProduct);
        return view("layouts.product",["showProduct"=>$getOneProduct]); 
    }

    public function sortProduct()
    {

    }

    /*public function showSlider()
    {
        $nextProducts = Product::all();
        dd($nextProducts);
        return view("layout.about",["sliderProducts"=>$nextProducts]);
    }*/

    /*public function showProduct($id)
    {
        $getOneProduct=Category::find($id);
        //$getOneProduct=Product::find($id);
        //dd($getOneProduct);
        return view("layouts.product", ["product"=>$getOneProduct]);
       
    }*/

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
