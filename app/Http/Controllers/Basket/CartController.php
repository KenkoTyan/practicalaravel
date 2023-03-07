<?php
namespace App\Http\Controllers\Basket;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request) {
        $product = Product::find($request->id);
        if($product->amount < 1) {
            return back();
        }
        if($basket = Cart::where('user_id', auth()->user()->id)->where('product_id', $request->id)->first()) {
            $basket->amount++;
            $product->amount--;
            $basket->save();
            $product->save();
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->id,
                'amount' => 1,
            ]);
            $product->amount--;
            $product->save();
        }    
        return redirect()->route('basketShow');
    }

    //кнопка удаления
    public function destroy($id) {
        Cart::destroy($id);
        //$prod=Product::find;
        //Cart::where($id)->where('product_id',$prod->id);

        
        return back();
    }

    public function checkout() {
        $baskets = Cart::where('user_id', auth()->user()->id)->get();
        return view('basket.cartShow', compact('baskets'));
    }
}