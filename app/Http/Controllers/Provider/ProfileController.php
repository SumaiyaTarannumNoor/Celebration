<?php

namespace App\Http\Controllers\provider;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use Session;



use App\Models\provider;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        Auth::guard('provider')->user();
    }

    public function index()
    {
        return view('provider.profile');
    }

    public function update(Request $request, Provider $provider)
    {
        // Form validation
        $request->validate([
            'username'              => 'required',
            'email'             => 'required',
            'profile_image'     => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        

        Auth::guard('provider')->user();
        // Get current user
        $provider = Provider::findOrFail(Auth::guard('provider')->user()->id); 
        (Auth::guard('provider')->user()->id) ;
        // Set user name
        $provider->username = $request->input('username');

        (Auth::guard('provider')->user()->id) ;
        // Set user name
        $provider->email = $request->input('email');

        (Auth::guard('provider')->user()->id) ;
        


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
            $provider->profile_image = $filePath;
        }
        // Persist user record to database
        $provider->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }
}
