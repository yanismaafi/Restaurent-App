<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    
    public function ReservationTable(ReservationRequest $request)
    {
        $table = Table::where('nbrPlaces',$request->nbrPerson)
                       ->where('reserved',false)->first();

                      
        if(!Empty($table))
        {
            $reservation = new Reservation();

            $reservation->name = $request->name;
            $reservation->email = $request->email;
            $reservation->phone =$request->phone;
            $reservation->date = $request->date;
            $reservation->time = $request->time;
            $reservation->nbrPerson = $request->nbrPerson;

            if($request->has('comment'))
            {
              $reservation->comment = $request->comment;
            }

            $table->reserved = true;
            $reservation->save();

            $table->reservation()->associate($reservation);
            $table->save();

  
            return response()->json("success");

             
        
        }else {  
                return response()->json('not available'); 
              }                
    }
}
