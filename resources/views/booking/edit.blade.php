<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  
        
        
    </head>
    <body>
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
                    <strong>Edit Data Booking</strong>
                </div>
                <div class="card-body">
                    
                    <form method="POST" action="/booking/update/{{$booking ->id}}">
                        {{ csrf_field() }}
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_konsumen">Nama Konsumen</label>
                                        <input type="text" name="nama_konsumen" class="form-control" placeholder="Nama Konsumen" value="{{$booking->nama_konsumen}}">
                                    </div>

                                    <div class="form-group">
                                    <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                          <option value="Laki-laki" @if($booking->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                          <option value="Perempuan" @if($booking->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Handphone</label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone" value="{{$booking->no_hp}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{$booking->email}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" placeholder="Alamat Konsumen">{{$booking->alamat}}</textarea>

                                    </div>
                                   
                                </div>
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="card">
                                <div class="card-body">  
                                    <div class="form-group">
                                        <label>Tanggal Booking</label>
                                        <div class='input-group' id='tanggal_booking'>
                                            <input class="tanggal_booking form-control" type="text" name="tanggal_booking" value="{{$booking->tanggal_booking}}">
                                        </div>            
                                       
                                    </div>
                                    <script type="text/javascript">
                                        $('.tanggal_booking').datepicker({  
                                        format: 'dd-mm-yyyy',
                                        autoclose:true
                                        });  
                                    </script>

                                    <div class="form-group">
                                        <label>Jam Booking</label>
                                        <div class='input-group' id='jam_booking'>
                                            <input class="jam_booking form-control" type="text" name="jam_booking" value="{{$booking->jam_booking}}">
                                        </div>
                                      
                                    </div>
                                    <script type="text/javascript">
                                        $('.jam_booking').datetimepicker({
                                            format: 'HH:mm:ss'
                                        }); 
                                    </script>
                                    <div class="form-group">
                                        <label>Nama Motor</label>
                                        <input type="text" name="nama_motor" class="form-control" placeholder="Nama Motor" value="{{$booking->nama_motor}}">  
                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Polisi</label>
                                        <input type="text" name="no_polisi" class="form-control" placeholder="Nomor Polisi" value="{{$booking->no_polisi}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Keluhan</label>
                                        <textarea name="keluhan" class="form-control" placeholder="Keluhan Anda..">{{$booking->keluhan}}</textarea>

                                    </div>
                                </div>
                                </div>
                            </div>                                                    
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="submit" class="btn btn-success" value="Update">
                            <a href="/booking" class="btn btn-primary">Kembali</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>