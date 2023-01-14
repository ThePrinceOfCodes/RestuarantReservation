<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    //
    public function stepOne()
    {
        return view('frontend/reservations/step-one');
    }

    public function stepTwo()
    {
        return view('frontend/reservations/step-two');
    }
}
