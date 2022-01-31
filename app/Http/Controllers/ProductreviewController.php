<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Productreview;
use Illuminate\Http\Request;


class ProductreviewController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();

        return view('customer.product.toreview',compact('products'));
    }
    //provideruserprofile reviews
    public function myreview()
 
    {   
        $provider_id= Auth::guard('provider')->user()->id;
        //$products=Product::where('provider_id',$provider_id)->orderBy('id','desc')->get();
        $reviews= Productreview::where('provider_id',$provider_id)->orderBy('id','desc')->paginate(5);
    
        
        return view('reviews.myreviews',['reviews'=>$reviews]);
    
    }
    
    //customer->reviews
    public function review($product_id)
    {   
        $customer_id= Auth::guard('customer')->user()->id;
        $product = Product::find($product_id);
        $reviews= Productreview::where('product_id',$product_id)->paginate(5);
    
        return view('reviews.reviews',['product'=>$product,'reviews'=>$reviews]);
    }
    public function providerreview($product_id)
    {   
        
        $product = Product::find($product_id);
        $reviews= Productreview::where('product_id',$product_id)->paginate(5);
    
        return view('reviews.providerreviews',['product'=>$product,'reviews'=>$reviews,'message'=>'Hello']);
        
    }
  

        public function storeReview(Request $request, $product_id)
        {
            //dd($request);
    
            $this->validate($request, [
                'writereview'=> 'required',
    
    
            ]);
            $product = Product::find($product_id);
            $productreview = new Productreview;
    
           
            $productreview->comment= $request->writereview;
            if($request->writereview=="hello world")
            {
                echo "yes";
            }
            $productreview->customer_id = Auth::guard('customer')->user()->id;
            $productreview->product_id = $product_id;
            $productreview->provider_id = $product->provider_id;
            $productreview->save();
    
            
            
    
            return back()->with('message', 'Review added successfully!');
    
    
        }


    

    
}
