<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddCustomerController extends Controller
{
    public function CustomerRegisterForm(){ // Displays customer Registration form page
        return view('admin.customer.add');
    }

    public function AddCustomer(Request $request){

        $this->validator($request); // Validator function to validate the form


        $customer = new Customer; // Creating new customer model object

        //Making the password Hashed
        $password = $request->input('password'); // Encrypting the password for security
        $hash = Hash::make($password);

        //Calculate age from date of Birth



        // Insering data into database

        $customer->username      = $request->input('username');
        $customer->email     = $request->input('email');

        $customer->password  = $hash;
        $customer->save();

          //redirect to page

        return redirect()->to('/admin/dashboard')->with('status','New customer account  has been created successfully');

    }
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'username'      => 'required|string|min:3|max:191',
                'email'     => 'required|email|unique:customers|min:5|max:191',
                'password'  => 'required|string|confirmed|min:6|max:255',
            ];

            //custom validation error messages.
            $messages = [

                'email.unique' => 'Email already exists',


            ];

            //validate the request.
            $request->validate($rules,$messages);


    }
}
