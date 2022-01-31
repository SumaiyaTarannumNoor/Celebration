<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\cartorder;
use App\Models\Bill;
use App\Models\OrderedItem;
use App\Models\OrderedProduct;
use Illuminate\Http\Request;
use Cart;

use Session;

class BillController extends Controller
{
    public function index()
    { 
     
        return view('bill.billing');
    }
 
    public function customer()
    {   
      
        $customer_id= Auth::guard('customer')->user()->id;
 
        
        $confirmedorders = DB::table('ordered_products')->select('*')
        ->join('customers', 'customers.id', '=', 'ordered_products.customer_id')
        ->join('products', 'products.id', '=', 'ordered_products.product_id')
        ->join('providers', 'providers.id', '=', 'products.provider_id')
        ->join('bills', 'bills.id', '=', 'ordered_products.order_id')
        
       
        ->where('ordered_products.customer_id', $customer_id)
        ->paginate(5);
    
    // 
      
     return view('confirmedorders.customer',['confirmedorders'=>$confirmedorders]);
    }

    public function onlineCustomer()
    {   
      
        $customer_id= Auth::guard('customer')->user()->id;
 
        
        $confirmedorders = DB::table('ordered_items')->select('*')
        ->join('customers', 'customers.id', '=', 'ordered_items.customer_id')
        ->join('products', 'products.id', '=', 'ordered_items.product_id')
        ->join('providers', 'providers.id', '=', 'products.provider_id')
  
        ->join('orders', 'orders.id', '=', 'ordered_items.order_id')
        
       
        ->where('ordered_items.customer_id', $customer_id)
        ->paginate(5);
    
         
     return view('confirmedorders.customerOnline',['confirmedorders'=>$confirmedorders]);
    }

    
    public function provider()
    {   
        $provider_id= Auth::guard('provider')->user()->id;

        $confirmedorders = DB::table('ordered_products')->select('*')
        ->join('customers', 'customers.id', '=', 'ordered_products.customer_id')
        ->join('products', 'products.id', '=', 'ordered_products.product_id')
        ->join('bills', 'bills.id', '=', 'ordered_products.order_id')
        ->where('provider_id', $provider_id)
        ->paginate(5);

         return view('confirmedorders.provider',['confirmedorders'=>$confirmedorders]);

    }

    public function onlineProvider()
    {   
        $provider_id= Auth::guard('provider')->user()->id;

        $confirmedorders = DB::table('ordered_items')->select('*')
        ->join('customers', 'customers.id', '=', 'ordered_items.customer_id')
        ->join('products', 'products.id', '=', 'ordered_items.product_id')
        ->join('orders', 'orders.id', '=', 'ordered_items.order_id')
        ->where('provider_id', $provider_id)
        ->paginate(5);


      
      

         return view('confirmedorders.providerOnline',['confirmedorders'=>$confirmedorders]);

    }

    public function admin()
    {
        $confirmedorders = DB::table('ordered_products')->select('*')
        ->join('customers', 'customers.id', '=', 'ordered_products.customer_id')
        // ->join('providers', 'providers.id', '=', 'products.provider_id')
        ->join('products', 'products.id', '=', 'ordered_products.product_id')
        ->join('bills', 'bills.id', '=', 'ordered_products.order_id')
        
        ->paginate(5);
 
       
        return view('confirmedorders.admin',compact('confirmedorders'));
    }

    public function adminOnline()
    { 
        $confirmedorders = DB::table('ordered_items')->select('*')
        ->join('customers', 'customers.id', '=', 'ordered_items.customer_id')
        // ->join('providers', 'providers.id', '=', 'products.provider_id')
        ->join('products', 'products.id', '=', 'ordered_items.product_id')
        ->join('orders', 'orders.id', '=', 'ordered_items.order_id')
        ->paginate(5);

        // $confirmedorders = OrderedItem::orderBy('id','desc')->get();

        return view('confirmedorders.adminOnline',compact('confirmedorders'));
    }



    public function store(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'fullname'=> 'required',
             'emailaddress'=> 'required',
             'phonenumber'=> 'required',
             'shippingaddress'=> 'required',


        ]);


    
        $bill = new Bill;
        $bill->customer_id = Auth::guard('customer')->user()->id;
        $bill->fullname= $request->fullname;
        $bill->emailaddress= $request->emailaddress;
        $bill->phonenumber= $request->phonenumber;
        $bill->shippingaddress= $request->shippingaddress;
        $bill->amount= Cart::getsubtotal();

        $bill->save();
        
      
        
       foreach(Cart::getcontent() as $item)
       {
           $cartorder= new OrderedProduct();
     
           $cartorder->customer_id=Auth::guard('customer')->user()->id;
           
           $cartorder->order_id= $bill->id;
           $cartorder->product_id=$item->id;
           $cartorder->name= $item->name;
           $cartorder->price= $item->price;
           $cartorder->quantity= $item->quantity;
          
          
           $cartorder->save();  
           Cart::clear();
        
        }
       



        return Redirect('/thankyou');

        
        



    }
}
