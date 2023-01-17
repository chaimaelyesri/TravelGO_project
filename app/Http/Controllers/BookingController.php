<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Activity;
use App\Models\Booking;
use App\User;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Booking::latest()
            ->simplepaginate(5);
        return view('backend.bookings.bookings',compact('orders'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index_filter($statut)
    {
        $orders = Booking::where('statut', $statut)
            ->paginate(5);
        return view('backend.bookings.bookings',compact('orders'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('success','Booking updated successfully');
    }

    public function ViewInvoice(Booking $booking)
    {
        return view('backend.bookings.invoice',compact('booking'));
    }


}
