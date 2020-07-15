<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class BookingController extends Controller
{
    public function index() {

        $booking = Booking::all();
        return view('booking.index', ['booking'=>$booking]);
    }
}
