<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;




use App\Models\Admin;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        Auth::guard('admin')->user();
    }

    public function index()
    {
        return view('admin.profile');
    }

    public function update(Request $request, Admin $admin)
    {
        // Form validation
        $request->validate([
            'username'              => 'required',
            'email'             => 'required',
            'profile_image'     => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        

        Auth::guard('admin')->user();
        // Get current user
        $admin = Admin::findOrFail(Auth::guard('admin')->user()->id); 
        (Auth::guard('admin')->user()->id) ;
        // Set user name
        $admin->username = $request->input('username');

        (Auth::guard('admin')->user()->id) ;
        // Set user email
        $admin->email = $request->input('email');

        (Auth::guard('admin')->user()->id) ;
        


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
            $admin->profile_image = $filePath;
        }
        // Persist user record to database
        $admin->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }
}
