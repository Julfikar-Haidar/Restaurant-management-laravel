<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationConfirmed;
use App\Reservation;
use Session;

class ReservationController extends Controller
{
     public function index()
    {
        $reservation= Reservation::all();
        return view('admin.reservation.index',compact('reservation'));
    }

    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();

         Notification::route('mail',$reservation->email )
                    ->notify(new ReservationConfirmed());
        Session::flash('success','Reservation successfully confirmed');

        return redirect()->back();
    }

     public function destory($id){
        Reservation::find($id)->delete();
        Session::flash('success','Reservation successfully deleted');
        return redirect()->back();
    }
}
