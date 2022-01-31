<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $complains = Complain::latest()->paginate(5);
        return view('admin.complains.index',compact('complains'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.complains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'subject' => 'required|max:150',
            'provider_name' => 'required',
            'details'=>'required',
        ]);

        Complain::create($request->all());

        return redirect()->route('admin.complains.index')
                        ->with('success','Complaint was submitted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complain  $complain
     * @return Response
     */
    public function show(Complain $complain)
    {
        return view('complain.show',compact('complain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complain  $product
     * @return Response
     */
    public function edit(Complain $complain)
    {
        return view('complain.edit',compact('complain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Complain  $complain
     * @return Response
     */
    public function update(Request $request, Complain $complain)
    {
         request()->validate([
            'subject' => 'required|max:150',
            'provider_name' => 'required',
            'details'=>'required',
        ]);

        $product->update($request->all());

        return redirect()->route('complains.index')
                        ->with('success','Complaint updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complain  $complain
     * @return Response
     */
    public function destroy(Complain $complain)
    {
        $complain->delete();

        return redirect()->route('complain.index')
                        ->with('success','Complaint deleted successfully');
    }
}
