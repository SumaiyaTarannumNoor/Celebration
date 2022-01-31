<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ConfirmedService;
use App\Models\OrderedItem;
use Illuminate\Http\Request;

class ConfirmServiceController extends Controller
{   
    public function index($meeting_id)
    {   
      
        $meeting = Meeting::find($meeting_id);
      
    
        return view('confirmedservices.confirming',['meeting'=>$meeting]);
    }
    
    public function provider()
    {   
      
        $product_id= Auth::guard('provider')->user()->product_id;

        $confirmedservices= OrderedItem::where('product_id',$product_id)->orderBy('id','desc')->get();
    
        
        return view('confirmedservices.provider',['confirmedservices'=>$confirmedservices]);
    }

    public function customer()
    {   
      
        $customer_id= Auth::guard('customer')->user()->id;

        $confirmedservices= OrderedItem::where('customer_id',$customer_id)->orderBy('id','desc')->get();
    
        
        return view('customer.service.all',['services'=>$confirmedservices]);
    }
    
    public function admin()
    {
        $confirmedservices = ConfirmedService::orderBy('id','desc')->get();

        return view('confirmedservices.admin',compact('confirmedservices'));
    }

    public function store(Request $request, $meeting_id)
{
        
        $meeting = Meeting::find($meeting_id);

        $service = new ConfirmedService();

        $service->customer_id = Auth::guard('customer')->user()->id;
        $service->provider_id = $meeting->provider_id;
        
        $service->CustomerName= $request->customername;
        $service->ProviderName= $request->providername;
        $service->EventType= $request->eventtype;
        $service->Venue= $request->venue;
        $service->Capacity= $request->capacity;
        $service->EmailAddress= $request->emailaddress;
        $service->PhoneNumber= $request->phonenumber;
        $service->Address= $request->shippingaddress;
        $service->Amount= $request->amount;
        
        $service->save();

        return Redirect('/thankyou');
    }
    
}
