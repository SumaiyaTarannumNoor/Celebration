<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\cartorder;
use App\Models\CartProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cart;

class ProductController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $products = Product::orderBy('id','desc')->get();

        return view('customer.product.show',compact('products'));
    }
    public function addtocart(Request $request, $id){

        $product = Product::find($id);
        Cart::add(  $product->id, $product->title, $product->price,1);
        session()->flash('success','Added to cart');
        return back();
    }
    public function getCart()
    {
        return view('customer.product.cart');
    }

    // public function update($rowId)
    // {
    //       Cart::session()->update($rowId,[

    //         'quantity' => request('quantity')

    //       ]) ;

    //       return back();

    // }
}
