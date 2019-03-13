<?php

namespace App\Http\Controllers;

use App\Booking;
use App\User;
use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('/products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $booking = new Booking;

        $booking->bookingDate= $request->bookingDate;
        $booking->userId=$request->userId;
        $booking->itemId=$id;

        $booking->save();
        return redirect()->to('/products')->with('bookingSuccess', 'Your booking is successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        // $bookingDetails = DB::table('tbl_booking')->get()->toArray();
        $user = auth()->user();
        $bookingDetails = DB::table('tbl_booking')
        ->join('tbl_items','tbl_items.itemId','=','tbl_booking.itemId')
        ->select('tbl_booking.*','tbl_items.*')
        ->where('tbl_booking.userId','=',$user->id)
        ->get();
        return view('/booking', compact('bookingDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
