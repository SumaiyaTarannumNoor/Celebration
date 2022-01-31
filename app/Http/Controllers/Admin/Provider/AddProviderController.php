<?php

namespace App\Http\Controllers\Admin\Provider;

use App\Models\Provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AddProviderController extends Controller
{
    public function ProviderRegisterForm(){

        return view('admin.provider.add');
    }

    public function AddProvider(Request $request){ // Adding a new provider function

        $this->validator($request); // Validate registration form


        $provider = new Provider; // Creating new model object

        //Making the password Hashed
        $password = $request->input('password');
        $hash = Hash::make($password);

        // Insering data into database

        $provider->username          = $request->input('username');
        $provider->email         = $request->input('email');
        $provider->password      = $hash;
        $provider->save();

          //redirect to page

        return redirect()->to('/admin/dashboard')->with('status','New provider profile  has been created successfully');

    }
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'username'        => 'required|string|min:3|max:191',
                'email'       => 'required|email|unique:providers|min:5|max:191',
                'password'    => 'required|string|confirmed|min:6|max:255',


            ];

            //custom validation error messages.
            $messages = [
                'email.unique'  => 'Email already exists',
            ];

            //validate the request.
            $request->validate($rules,$messages);


    }
}
