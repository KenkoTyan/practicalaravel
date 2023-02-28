<?php

namespace App\Http\Controllers\Basket;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Basket;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request) {
        $product = Product::find($request->id);
        if($product->amount < 1) {
            return back();
        }

        if($basket = Basket::where('user_id', auth()->user()->id)->where('product_id', $request->id)->first()) {
            $basket->amount++;
            $product->amount--;
            $basket->save();
            $product->save();
        } else {
            Basket::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->id,
                'amount' => 1,
            ]);
            $product->amount--;
            $product->save();
        }
        
        return redirect()->route('basketGet');
    }


    public function checkout() {
        /* коллекция корзины */
        $baskets = Basket::where('user_id', auth()->user()->id)->get();
        //dd($baskets);
        return view('basket.cart', compact('baskets'));
    }


}
