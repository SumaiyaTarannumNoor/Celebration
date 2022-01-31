<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\cartorder;
use App\Models\CartProduct;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Cart;

class CartController extends Controller
{
    
    public function removeItem($id)
    {
        Cart::remove($id);

        if (Cart::isEmpty()) {
            return redirect('/customer/product');
        }
        session()->flash('success','Removed from Cart');
        return back();
    }
    public function clear()
    {
        Cart::clear();

        return redirect('/customer/product');
    }
}
