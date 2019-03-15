<?php

namespace App\Http\Controllers;

use App\Booking;
use App\expiredBooking;
use App\User;
use Illuminate\Http\Request;
use DB;
use Carbon;

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
    public function create($id)
    {
        return redirect()->to('/bookings');
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

        $booking->bookingDate = (Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i'));
        $booking->expireDate = (Carbon\Carbon::now('Asia/Kathmandu')->addHours(48)->toDateTimeString('Y-m-d H:i'));
        $booking->userId = $request->userId;
        $booking->itemId = $id;

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
    public function destroy(Booking $booking,$id)
    {

            DB::beginTransaction();
        //transaction with try catch for inserting booking details in expiredBooking table 

            try {

                $search = DB::table('tbl_booking')->select('userId', 'itemId')->first();

                $insertExpired = new expiredBooking;
                
                $insertExpired->expiredDate = Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i');
                $insertExpired->userId = $search->userId;
                $insertExpired->itemId = $search->itemId;
                
                $insertExpired->save();
            } 

            catch (Exception $e) {
                DB::rollback(); //rollback if insert transaction fails
                throw $e;
                
                
            }


        //transaction with try catch for deleting booking details from Booking table

            try {
                $deleteBooking = Booking::where('bookingId',$id)->delete();
            } 

            catch (Exception $e) {
                DB::rollback(); //rollback if delete transaction fails
                throw $e;
                
                
            }


            //If both transaction are success then commit

            DB::commit();

            return redirect()->to('/bookings')->with('bookingRemoved', 'Your booking is successfully removed');
    }
}
