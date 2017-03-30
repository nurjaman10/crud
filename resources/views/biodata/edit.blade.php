@extends('layout.tampilan2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Edit Data</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Daftar Siswa Baru</center></div>
                <div class="panel-body"><br><br>
					<form class="" action="{{route('biodata.update',$biodata->id)}}" method="post">
						<input type="hidden" name="_method" value="PATCH">
						{{csrf_field()}}
						<div class="form-group{{ ($errors->has('nis')) ? $errors->first('nis') : '' }}">
							<input type="number" name="nis" class="form-control" placeholder="Masukkan NIS" value="{{$biodata->nis}}">
							{!! $errors->first('nis','<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ ($errors->has('nama')) ? $errors->first('nis') : '' }}">
							<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" value="{{$biodata->nama}}">
							{!! $errors->first('nama','<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ ($errors->has('tempat_lahir')) ? $errors->first('nis') : '' }}">
							<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{$biodata->tempat_lahir}}">
							{!! $errors->first('tempat_lahir','<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ ($errors->has('tanggal_lahir')) ? $errors->first('nis') : '' }}">
							<input type="date" name="tanggal_lahir" class="form-control" value="{{$biodata->tanggal_lahir}}">
							{!! $errors->first('nama','<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ ($errors->has('jenis_kelamin')) ? $errors->first('nis') : '' }}">
							<select class="form-control" name="jenis_kelamin" required="" value="{{$biodata->jenis_kelamin}}">
								<option>Laki-laki</option>
								<option>Perempuan</option>
							</select>
							{!! $errors->first('jenis_kelamin','<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ ($errors->has('alamat')) ? $errors->first('nis') : '' }}">
							<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{$biodata->alamat}}">
							{!! $errors->first('alamat','<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ ($errors->has('jurusan')) ? $errors->first('nis') : '' }}">
							<select class="form-control" name="jurusan" required="" value="{{$biodata->jurusan}}">
								<option>RPL</option>
								<option>Multimedia</option>
								<option>Tataniaga</option>
								<option>Akuntansi</option>
								<option>Adm.Perkantoran</option>
							</select>
							{!! $errors->first('jurusan','<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ ($errors->has('nama_sekolah')) ? $errors->first('nis') : '' }}">
							<input type="text" name="asal_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah" value="{{$biodata->nama_sekolah}}">
							{!! $errors->first('nama_sekolah','<p class="help-block">:message</p>') !!}
						</div><br><br>
						<div class="form-group">
							<center><input type="submit" class="btn btn-success" value="Simpan"></center>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection