<?php

namespace App\Http\Controllers;

use App\Models\softDeletes;
use Illuminate\Http\Request;
use App\Models\AdminReservation;
use Illuminate\Support\Facades\Hash;

class AdminReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Reservations = AdminReservation::all();
        return view ('admin.reservation.index' , compact('Reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservation.add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hashedPassword = Hash::make($request->password);
        AdminReservation::create([
            // "Database Colum"=>"Request Input",
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
            "restaurant" => $request->restaurant,
            "guest_number" => $request->guest_number,
            "res_date" => $request->res_date,
        ]);
                // return response(' The Student Add Successfully');

        return redirect()->route('Reservation.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminReservation  $adminReseration
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $Reservation = AdminReservation::onlyTrashed()->get();
        return view('Reservation.softdelete' , compact('Reservation'));
        return $Reservation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminReservation  $adminReservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Reservation = AdminReservation::findorFail($id);
        return view('admin.reservation.edit' , compact('Reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminReseration  $adminReseration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Reservation = AdminReservation::find($id);
        $input = $request->all();
        $Reservation->update($input);
        return redirect('Reservation')->with('flash_message', 'Reservation Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminReservation  $adminReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminReservation::destroy($id);
        return redirect()->route('Reservation.index');
    }
}
