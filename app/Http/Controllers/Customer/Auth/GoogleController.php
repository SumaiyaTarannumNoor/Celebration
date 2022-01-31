<?php

namespace App\Http\Controllers\Customer\Auth;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\Customer;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = Customer::where('google_id', $user->id)->first();

            if($finduser){

                Auth::guard('customer')->login($finduser);

                return redirect()
                    ->intended(route('customer.dashboard')) // Redirect to the dashboard
                    ->with('status','You are Logged in as customer!');

            }else{
                $newUser = Customer::create([
                    'username' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('password')
                ]);

                Auth::guard('customer')->login($newUser);

                return redirect()
                    ->intended(route('customer.dashboard')) // Redirect to the dashboard
                    ->with('status','You are Logged in as customer!');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
