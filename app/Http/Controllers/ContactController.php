<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use DateTime;
use DateTimeZone;

class ContactController extends Controller
{
    public function loadTicketForm(){
        return view('tickets');
    }

    public function sendTicketForm(Request $request){
        
        //dd($request->bearertoken());
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'tickets' => 'required'
        ]);
       
        $input = $request->all();
        Contact::create($input);
        
        //Send Mail
        Mail::send('contactMail', array(
            'fullname' => $input['fullname'],
            'email' => $input['email'],
            'password' => $input['password'],
            'tickets' => $input['tickets']
        ), function($message) use ($request){
            $dateTime = new DateTime('now', new DateTimeZone('Europe/Berlin'));
            $title = 'Ticketkauf ID '.$dateTime->format('d-m-Y H:i:s');
            $message->from($request->email);
            $message->to('teke900@gmail.com')
            ->subject($title);
        });

        return redirect()->back()->with(['success' => 'Wir melden uns!']);

    }
}
