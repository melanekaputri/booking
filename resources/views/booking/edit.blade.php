@extends('layouts.master')
<title>EDIT DATA BOOKING</title>
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
                    <strong> TAMBAH DATA BOOKING </strong>
                </div>
        <div class="card-body">
                <form method="POST" action="/booking/{{$booking ->id}}/update">
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
                                    

                                    <div class="form-group">
                                        <label>Jam Booking</label>
                                        <div class='input-group' id='jam_booking'>
                                            <input class="jam_booking form-control" type="text" name="jam_booking" value="{{$booking->jam_booking}}">
                                        </div>
                                      
                                    </div>
                                    
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
@stop

@section('footer')
<script type="text/javascript">
    $('.tanggal_booking').datepicker({  
    format: 'dd-mm-yyyy',
    autoclose:true
    });  
</script>

<script type="text/javascript">
    $('.jam_booking').datetimepicker({
    format: 'HH:mm:ss'
    }); 
</script>
@stop