<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Response;


class LoginController extends Controller
{
   /**
     * Show the login form.
     *
     * @return Response
     */

    public function showLoginForm()
    {
        if((Auth::guard('customer')->check())){
            return redirect()
                ->intended(route('customer.dashboard'))    //if User is already logged in, user will be redirected to the dashboard.
                ->with('status', 'You are already logged in as customer!');
        }
    else{
        return view('customer.login');
    }

    }


     /**
     * Login the admin.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function login(Request $request)
    {

        $this->validator($request);

       if(Auth::guard('customer')->attempt($request->only('email','password'),$request->filled('remember'))){
        //Authentication passed...
        return redirect()
            ->intended(route('customer.dashboard')) // Redirect to the dashboard
            ->with('status','You are Logged in as customer!');  // Success message
    }

    //Authentication failed...

   return $this->loginFailed();

    }

    /**
     * Logout the user
     *
     * @return RedirectResponse
     */
    public function logout()
    {

        Auth::guard('customer')->logout();
         return redirect()
        ->route('login')
        ->with('status','Logout Successful!'); //Generating success message
    }

    /**
     * Validate the form data.
     *
     * @param Request $request
     * @return
     */
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'email'    => 'required|email|exists:customers|min:5|max:191',
                'password' => 'required|string|min:4|max:255',
            ];

            //custom validation error messages.
            $messages = [
                'email.exists' => 'These credentials do not match our records.',

            ];

            //validate the request.
            $request->validate($rules,$messages);


    }

    /**
     * Redirect back after a failed login.
     *
     * @return RedirectResponse
     */
    private function loginFailed()
    {

        return redirect()
        ->back()
        ->withInput()
        ->with('error','Incorrect Password, please try again!');

    }

}
