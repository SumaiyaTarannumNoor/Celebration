<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Servicereview;
use Illuminate\Http\Request;


class ServicereviewController extends Controller
{
    // public function index()
    // {
    //     $services = Service::orderBy('id','desc')->get();

    //     return view('customer.product.toreview',compact('services'));
    // }
    // // //provider userprofile reviews
    // public function myreview()
 
    // {   
    //     $provider_id= Auth::guard('provider')->user()->id;
    //     $reviews= Servicereview::where('provider_id',$provider_id)->orderBy('id','desc')->get();

        
    //     return view('servicereviews.myreviews',['reviews'=>$reviews]);
    
    // }
    
    //customer ->reviews
    public function review($service_id)
    {   
        $customer_id= Auth::guard('customer')->user()->id;
        $service = Service::find($service_id);
        $reviews= Servicereview::where('service_id',$service_id)->paginate(5);
        
        return view('servicereviews.reviews',['service'=>$service,'reviews'=>$reviews]);
        
    }
   //provider seeing customer reviews
    public function providerreview($service_id)
    {   
        
        $service = Service::find($service_id);
        $reviews= Servicereview::where('service_id',$service_id)->paginate(5);
    
        return view('servicereviews.providerreviews',['service'=>$service,'reviews'=>$reviews,'message'=>'Hello']);
        
    }
  
//customerposting service review
        public function storeReview(Request $request, $service_id)
        {
    
            $this->validate($request, [
                'writereview'=> 'required',
    
    
            ]);
            $service = Service::find($service_id);
            $servicereview = new Servicereview;
            $servicereview->comment= $request->writereview;
            $servicereview->customer_id = Auth::guard('customer')->user()->id;
            $servicereview->provider_id = $service->provider_id;
            $servicereview->service_id = $service_id;
            $servicereview->save();
            return back()->with('message', 'Review added successfully!');
    
    
        }

        public function myreview()
 
        {   
            $provider_id= Auth::guard('provider')->user()->id;
            //$products=Product::where('provider_id',$provider_id)->orderBy('id','desc')->get();
            $reviews= Servicereview::where('provider_id',$provider_id)->orderBy('id','desc')->paginate(5);
        
            
            return view('reviews.myservicereviews',['reviews'=>$reviews]);
        
        }
}
