<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MeetingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function showprovider()
    {
        $providers = Provider::orderBy('id','desc')->get();
        return view('customer.providerlist',compact('providers'));
    }
    public function showmeeting($id)
    {
        $provider = Provider::find($id);
        return view('customer.addmeeting',compact('provider'));
    }
    public function meetinglist()
    {
        $customer = Auth::guard('customer')->user()->id;
        $meetings = Meeting::where('customer_id', $customer)->get();
        return view('customer.showmeeting',compact('meetings'));
    }


    public function schedulemeeting($id,Request $request)
    {
        $provider = Provider::findOrfail($id);
if(Meeting::where('scheduleddate',$request->date)->where('scheduledtime',$request->time)->first()){
    session()->flash('failed','Please Select Another Time');
    return back();
}

        $meeting = new Meeting;
        $meeting->customer_id = Auth::guard('customer')->user()->id;
        $meeting->provider_id = $provider->id;
        $meeting->scheduleddate = $request->date;
        $meeting->scheduledtime = $request->time;
        $meeting->description = $request->description;

        $meeting->save();

        session()->flash('success','Request has been sent');

        return back();

    }
}
