<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Complain;

class BackComplainsController extends Controller
{
    //
    public function index()
    {
        $customer=Auth::guard('customer')->user()->id;
        $complains = Complain::where('customer_id',$customer)->orderBy('id','desc')->get();
        return view('customer.complain.allcomplains')->with('complains',$complains);

    }
    public function create()
    {
        return view('customer.complain.addcomplain');
    }
    public function delete($id)
    {
    $complain=Complain::find($id);
    if(!is_null($complain)){
        $complain->delete();
    }
    session()->flash('success','Complaint has been deleted');
    return back();
    }



    public function edit($id)
    {
      $complain = Complain::find($id);
        return view('customer.complain.edit')->with('complain',$complain);

    }

      public function store(Request $request)
      {

        $request->validate([
            'subject' => 'required|max:150',
            'provider_name' => 'required',
            'details'=>'required',
        ]);



        $complain = new Complain;
        $complain->subject=$request->subject;
        $complain->provider_name=$request->provider_name;
        $complain->details=$request->details;
        $complain->customer_id=Auth::guard('customer')->user()->id;

        $complain->save();




          session()->flash('success','Complaint has been added');
          return back();
      }
      public function update(Request $request, $id)
      {

        $request->validate([
          'subject' => 'required|max:150',
          'provider_name' => 'required',
          'details'=>'required',
        ]);



        $complain = Complain::find($id);
        $complain->subject=$request->subject;
        $complain->provider_name=$request->provider_name;
        $complain->details=$request->details;


        $complain->save();


          session()->flash('success','Complaint has been edited');
          return back();
      }
}
