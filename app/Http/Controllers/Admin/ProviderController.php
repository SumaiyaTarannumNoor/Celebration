<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;   

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Hash;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $providers = Provider::where([
            ['username', '!=', Null],
            [function ($query) use ($request){
                if (($term = $request->term)){
                    $query->orWhere('username', 'LIKE', '%' . $term . '%')->get();
                }
            }]
            ])
            ->orderBy('id','DESC')
            ->paginate(10);
         
            return view('admin.provider.index',compact('providers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.provider.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' =>'required',
            'password' => 'required',
        ]);
    
        $provider = new Provider;

        $password = $request->input('password'); // Encrypting the password for security
        $hash = Hash::make($password);

        $provider->username      = $request->input('username');
        $provider->email     = $request->input('email');

        $provider->password  = $hash;
        $provider->save();
     
        return redirect()->route('admin.provider.index')
                        ->with('success','Provider created successfully.');

                        
        

    }

    /**
     * Display the specified resource.
     *
     * @param Provider $provider
     * @return Response
     */
    public function show(Provider $provider)
    {
        return view('admin.provider.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Provider $provider
     * @return Response
     */
    public function edit(Provider $provider)
    {
        return view('admin.provider.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Provider $provider
     * @return Response
     */
     public function update(Request $request, Provider $provider)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $provider->update($request->all());
    
        return redirect()->route('admin.provider.index')
                        ->with('success','Provider updated successfully');

                        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $provider->password  = $hash;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Provider $provider
     * @return Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
    
        return redirect()->route('admin.provider.index')
                        ->with('success','Provider deleted successfully');
    }
}
