<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{




    use RegistersUsers;

    public function CustomerRegisterForm(){     // This function will display the registration form


        /* Checking if a user is logged in there will be no need to display register page */

        //User will be redirected to their dashboard if already logged in.

        if((Auth::guard('customer')->check())){
            return redirect()
            ->intended(route('customer.dashboard'))
            ->with('status','You are already registered as Customer!');
        }
        elseif((Auth::guard('provider')->check())){
            return redirect()
            ->intended(route('provider.dashboard'))
            ->with('status','You are logged in as a doctor.');
        }
        elseif((Auth::guard('admin')->check())){
            return redirect()
            ->intended(route('admin.dashboard'))
            ->with('status','You are logged in as an Admin.');
        }

    else{


        //If user is not logged in Register page will be served


        return view('customer.register');
    }
    }
    public function RegisterCustomer(Request $request){

        $this->validator($request);


        $customer = new Customer;

        //Making the password Hashed
        $password = $request->input('password'); // Encrypting the password for security
        $hash = Hash::make($password);

        //Calculate age from date of Birth

      /*  $dateOfBirth = $request->input('dob');
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        $age = $diff->format('%y'); */

        // Insering data into database

        $customer->username      = $request->input('username');
        $customer->email     = $request->input('email');

        $customer->password  = $hash;
        $customer->save();

          //redirect to dashboard

        return redirect()->to('/customer/login')->with('status','Customer Registered Successfully.Please login to access the service');

    }
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'username'  => 'required|string|min:3|max:191',
                'email'     => 'required|email|unique:Customers|min:5|max:191',
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
