<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    
    public function ReservationTable(ReservationRequest $request)
    {
        
          Reservation::create([
              "name" => $request->name,
              "email" => $request->email,
              "phone" => $request->phone,
              "date" => $request->date,
              "time" => $request->time,
              "nbrPerson" => $request->nbrPerson,
              "comment" => $request->comment,
          ]);

         return response()->json("success");
    }
}
