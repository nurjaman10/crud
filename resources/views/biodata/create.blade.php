@extends('layout.tampilan')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Daftar Siswa Baru</h1>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Pendaftaran</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('biodata.store')}}">
                        {{csrf_field()}}<br><br>
                        <div class="form-group{{ ($errors->has('nis')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="nis">NIS</label>
                            <div class="col-sm-6    ">
                                <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS" required="">
                                {!! $errors->first('nis','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('nama')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="nama">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" required="">
                                {!! $errors->first('nama','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('tempat_lahir')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="tempat_lahir">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" required="">
                                {!! $errors->first('tempat_lahir','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('tanggal_lahir')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="tanggal_lahir">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" name="tanggal_lahir" class="form-control">
                                {!! $errors->first('tanggal_lahir','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('jenis_kelamin')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="col-sm-5">
                            	<select class="form-control" name="jenis_kelamin" required="">
									<option>Laki-laki</option>
									<option>Perempuan</option>
								</select>
                                {!! $errors->first('jenis_kelamin','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('alamat')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="alamat">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat" required="">
                                {!! $errors->first('alamat','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('jurusan')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="jurusan">Ambil Jurusan</label>
                            <div class="col-sm-6">
                            	<select class="form-control" name="jurusan" required="">
									<option>RPL</option>
									<option>Multimedia</option>
									<option>Tataniaga</option>
									<option>Akuntansi</option>
									<option>Adm.Perkantoran</option>
								</select>
                                {!! $errors->first('jurusan','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('nama_sekolah')) ? $errors->first('nis') : '' }}" >
                            <label class="col-sm-3 control-label" for="nama_sekolah">Asal Sekolah</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah" required="">
                                {!! $errors->first('nama_sekolah','<p class="help-block">:message</p>') !!}
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <center>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </center>
                        </div><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection