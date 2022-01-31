<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Meeting;
use App\Models\Message;
use http\Env\Response;
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

            return view('customer.showmessage', compact('meeting', 'messages'));

    }
    public function sendmessage($id,Request $request)
    {



        $meeting = Meeting::find($id);
        $customer = Auth::guard('customer')->user()->id;
        $message = new Message;
        $message->sender_id = $meeting->provider->id;
        $message->recipent_id = $customer;
        $message->messagebody = $request->messagebody;
        $message->meeting_id = $meeting->id;
        $message->sender = 'customer';
        try {
            $message->save();
        }catch (Exception $e){
            return response()->json(["msg"=>"NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO"]);
        }


        //session()->flash('success','Message Sent');
        return response()->json(['success'=>'message is successfully submitted!']);
    }
}
