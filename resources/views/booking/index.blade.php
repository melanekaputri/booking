<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Booking Service</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Booking Service
                </div>
                <div class="card-body">
                    <a href="/booking/create" class="btn btn-primary">Input Booking Baru</a>
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
                                    <a href="/booking/hapus/{{ $bkg->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
