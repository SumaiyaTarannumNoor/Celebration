<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Customer;
use App\Models\Meeting;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;


class MeetingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function showmeeting()
    {
        $provider = Auth::guard('provider')->user()->id;
        $meetings = Meeting::where('provider_id', $provider)->get();
        return view('provider.showmeeting',compact('meetings'));
    }




    public function acceptmeeting($id)
    {
     $meeting = Meeting::find($id);
     $meeting->status = 'Approved';
     $meeting->save();


     return view('provider.showmessage',compact('meeting'));

    }

}
