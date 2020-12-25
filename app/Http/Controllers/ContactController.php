<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ReservationRequest;

class ContactController extends Controller
{
    
    
    public function contact(ContactRequest $request)
    {
          Contact::create([
              "name" => $request->name,
              "email" => $request->email,
              "subject" => $request->subject,
              "message" => $request->message,
          ]);

         return response()->json("success");
    }



}
