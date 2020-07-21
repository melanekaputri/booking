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

    public function tambah() {
        
        return view('booking.store');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'nama_konsumen' => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            'no_hp'         => 'required',
            'email'         => 'required', 
            'tanggal_booking'   => 'required',
            'jam_booking'       => 'required',
            'nama_motor'        => 'required',
            'no_polisi'         => 'required',
            'keluhan'           => 'required'
    	]);
 
        Booking::create([
            'nama_konsumen'     => $request->nama_konsumen,
            'jenis_kelamin'    => $request->jenis_kelamin,
            'alamat'            => $request->alamat,
            'no_hp'            => $request->no_hp,
            'email'            => $request->email,
            'tanggal_booking'  => $request->tanggal_booking,
            'jam_booking'      => $request->jam_booking,
            'nama_motor'       => $request->nama_motor,
            'no_polisi'        => $request->no_polisi,
            'keluhan'          => $request->keluhan

    	]);     
        return redirect('/booking')->with('success','Berhasil menambahkan data booking!'); 
    }

    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('booking.edit',['booking' => $booking]);

    }

    public function update(Request $request, $id)
    {
        
        $booking = Booking::find($id);
        $booking->update($request->all());        
        return redirect('/booking')->with('success','Data berhasil di Update!'); 
    }

    public function delete($id)
    {
        $booking = Booking::find($id);
        $booking->delete($booking);
        return redirect('/booking')->with('success','Berhasil menghapus data!');
    }
}
