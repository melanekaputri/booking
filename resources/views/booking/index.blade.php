@extends('layouts.master')
<title>Booking Service</title>

@section('content')
        <div class="container">
            <div class="card mt-5">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                    {{session('success')}}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    </div>
                @endif
                <div class="card-header text-center">
                    <strong> DATA SERVICE </strong>
                </div>
                <div class="card-body">
                    <a href="/booking/tambah" class="btn btn-primary">Input Booking Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Konsumen</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Motor</th>
                                <th>No Polisi</th>
                                <th>Keluhan</th>
                                <th>Tanggal Booking</th>
                                <th>Jam Booking</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($booking as $bkg)
                            <tr>
                                <td>{{ $bkg->nama_konsumen }}</td>
                                <td>{{ $bkg->jenis_kelamin }}</td>
                                <td>{{ $bkg->nama_motor }}</td>
                                <td>{{ $bkg->no_polisi }}</td>
                                <td>{{ $bkg->keluhan }}</td>
                                <td>{{ $bkg->tanggal_booking }}</td>
                                <td>{{ $bkg->jam_booking }}</td>
                                <td>{{ $bkg->no_hp }}</td>
                                <td>{{ $bkg->email }}</td>
                                <td>{{ $bkg->alamat }}</td>
                                <td>
                                    <a href="/booking/edit/{{ $bkg->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/booking/delete/{{ $bkg->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
