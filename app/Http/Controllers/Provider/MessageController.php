<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Customer;
use App\Models\Meeting;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showmessage($id)
    {
        $meeting = Meeting::find($id);
        $messages = Message::where('meeting_id', $id)->orderBy('id', 'asc')->get();

            return view('provider.showmessage', compact('meeting', 'messages'));

    }
    public function sendmessage($id,Request $request)
    {
        $meeting = Meeting::find($id);
        $provider = Auth::guard('provider')->user()->id;
        $message = new Message;
        $message->recipent_id = $meeting->customer->id;
        $message->sender_id = $provider;
        $message->messagebody = $request->messagebody;
        $message->meeting_id = $meeting->id;
        $message->sender = 'provider';

        try {
            $message->save();
        }catch (Exception $e){
            return response()->json(["msg"=>"NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO"]);
        }


        //session()->flash('success','Message Sent');
        return response()->json(['success'=>'message is successfully submitted!']);
    }
}
