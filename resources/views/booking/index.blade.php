@extends('layouts.master')
<title>Booking Service</title>

@section('content')
    <div class="card shadow m-4">
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
            <div class="table-responsive ml-5">
                <a href="/home" class="btn btn-primary">Kembali</a>
                <a href="/booking/tambah" class="btn btn-primary">Input Booking Baru</a><br/><br/>
                <table class="table table-hover table-paginate" width="100%" cellspacing="0">
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
                                    <a href="/booking/{{ $bkg->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" booking-id="{{$bkg->id}}" class="btn btn-danger delete btn-sm">Hapus</a>                                    
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
@stop

@section('footer')
    <script>
        $('.delete').click(function(){
            var booking_id = $(this).attr('booking-id');
            swal({
                title: "Yakin Ingin Menghapus Data Ini?",
                text: "Data Booking dengan ID "+ booking_id +" akan dihapus!!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location = "/booking/"+booking_id+"/delete";
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
        $('.table-paginate').dataTable();
    } );
    </script>
   
@stop