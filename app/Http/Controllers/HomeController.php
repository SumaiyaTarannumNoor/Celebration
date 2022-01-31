<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function show()
    {
        return view('showpage');
    }
    public function contact()
    {
        return view('contact');
    }
    public function send_mail(Request $request)
    {
        $this->validate($request, [
            'fullname' => ['required', 'string', 'max:255' ],
            'email' => ['string', 'email', 'max:255' ],
            'subject' => ['string', 'max:255'],
            'message' => ['required', 'string', 'max:255']
        ]);

        $contact = new Contact;
           $contact->fullname = $request->fullname;
           $contact->email = $request->email;
           $contact->subject = $request->subject;
           $contact->message = $request->message;
     $contact->save();


        return redirect()->route('contact')->with('status', 'Your Message has been received');
    }


}
