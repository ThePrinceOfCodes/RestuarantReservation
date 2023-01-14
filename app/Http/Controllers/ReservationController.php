<?php

namespace App\Http\Controllers;

use App\Enums\TableStatus;
use App\Models\Table;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationStoreRequest;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $tables = Table::where('status',TableStatus::Available)->get();
        return view('admin.reservations.create', compact('tables'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        //
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning','please select a table that matches your guests number');
        }

        $request_date = Carbon::parse($request->res_date);
        foreach($table->reservations as $res){
            if($res->res_date->format('y-m-d') == $request_date){
                return back()->with('warning','table not available for the chosen date');
            }
        }
        
        Reservation::create($request->validated());

        return to_route(('admin.reservations.index'))->with('success','reservations created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('admin.reservations.edit', compact('reservation','tables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning','please select a table that matches your guests number');
        }

        $request_date = Carbon::parse($request->res_date);
        $reservations = $table->reservations()->where('id','!=', $reservation->id)->get();
        foreach($reservations as $res){
            if($res->res_date->format('y-m-d') == $request_date){
                return back()->with('warning','table not available for the chosen date');
            }
        }

        $reservation->update($request->validated());

        return to_route(('admin.reservations.index'))->with('success','reservations updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
        $reservation->delete();
        return view('admin.reservations.index')->with('danger','Reservation deleted successfully');
    }
}
