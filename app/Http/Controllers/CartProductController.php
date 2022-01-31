<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CartProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\ConfirmedService;
use App\Models\Product;
use Cart;

use Illuminate\Http\Request;
use Symfony\Component\Translation\Dumper\CsvFileDumper;

class CartProductController extends Controller
{
    public function index($id)
    {   
      
        $products = CartProduct::find($id);
      
         
        return view('cart.cart',['products'=>$products]);
    }
    
    public function addtocart(Request $request, $id){

        // $product = Product::find($id);


        // $productorder = new CartProduct();
    
           
        //     $productorder->price=$product->price;
            
        //     $productorder->customer_id = Auth::guard('customer')->user()->id;
        //     $productorder->product_id = $product->id;
        //     $productorder->provider_id = $product->provider_id;
        //     $productorder->user_ip= $request->ip();
        //     $productorder->save();
    

        // session()->flash('success','Added to cart');
        // return view('cart.cart');
    } 

    public function delete(CartProduct $id)
    {
        $id->delete();
        return back();
    }

}
