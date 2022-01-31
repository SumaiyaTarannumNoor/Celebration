<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addservicepage()
    {

        return view('provider.service.add');
    }
    public function allservice()
    {

        $services = Service::orderBy('id','desc')->get();
        return view('provider.service.all',compact('services'));
    }
    public function addservice(Request $request)
    {
         // Validator function to validate the form


        $service = new Service; // Creating new customer model object


        //Calculate age from date of Birth



        // Insering data into database
        $service->provider_id = Auth::guard('provider')->user()->id;
        $service->name      = $request->input('name');
        $service->capacity     = $request->input('capacity');
        $service->pricerange     = $request->input('pricerange');

        $service->save();

        //redirect to page

        return redirect()->to('/provider/service/add')->with('status','New Service  has been created successfully');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('provider.service.edit')->with('service',$service);

    }
    public function delete($id)
    {
        $service=Service::find($id);
        if(!is_null($service)){
            $service->delete();
        }
        session()->flash('success','service has been deleted');
        return back();
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|max:150',
            'capacity' => 'required',

            'pricerange'=>'required',
        ]);



        $service = Service::find($id);
        $service->name=$request->name;
        $service->capacity=$request->capacity;
        $service->pricerange=$request->pricerange;


        $service->save();




        session()->flash('success','service has been edited');
        return back();
    }
}
