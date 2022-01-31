<?php

namespace App\Http\Controllers\customer;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use Session;



use App\Models\Customer;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        Auth::guard('customer')->user();
    }

    public function index()
    {
        return view('customer.profile');
    }

    public function update(Request $request, Customer $customer)
    {
        // Form validation
        $request->validate([
            'username'              => 'required',
            'email'             => 'required',
            'profile_image'     => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        

        Auth::guard('customer')->user();
        // Get current user
        $customer = Customer::findOrFail(Auth::guard('customer')->user()->id); 
        (Auth::guard('customer')->user()->id) ;
        // Set user name
        $customer->username = $request->input('username');

        (Auth::guard('customer')->user()->id) ;
        // Set user email
        $customer->email = $request->input('email');

        (Auth::guard('customer')->user()->id) ;
        


        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $customer->profile_image = $filePath;
        }
        // Persist user record to database
        $customer->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }
}
