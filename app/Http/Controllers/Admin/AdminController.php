<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $admin = Admin::latest()->paginate(5);
        return view('admin.index',compact('Admins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
                return view('admin.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'email' =>'required|email|unique:admins,email',
            'password' => 'required|same:confirm-password',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        Admin::create($request->all());
     
        return redirect()->route('admin.profile')
                        ->with('success','Customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Admin $admin
     * @return Response
     */
    public function show(Admin $admin)
    {
        return view('admin.show',compact('admin'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $admin
     * @return Response
     */
    public function edit(Admin $admin)
    {
                return view('admin.profile',compact('Admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Admin $admin
     * @return Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:admins,email, $admin->id',
            'password' => 'required|nullable,',
        ]);
        
        
        Admin::update($request->all());


                        $admin->username = $request->username;
                        $admin->email = $request->email;
                        $admin->password = bcrypt($request->password);
                        $admin->save();                


        session::flash('success','Admin updated successfully.');
        return redirect()->back();

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Admin $admin
     * @return Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function profile()
    {
        $admin = auth()-> user();
        return view('admin.profile', compact('admin'));
    }

    public function profile_update(Request $request, Admin $admin)
    {
        $admin = auth()-> user();

        $this->validate($request, [
            'username' => 'required|string',
            'email' => 'required|email|unique:admins,email, $admin->id',
            'password' => 'required|nullable',
            'image' => 'sometimes|nullable|image|max:2048',
        ]);
        //Admin::update($request->all());
        Admin::where('id', '>', 0)->update($request->all());



        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();

        session::flash('success','Admin updated successfully.');
        return redirect()->back();
    }
}
