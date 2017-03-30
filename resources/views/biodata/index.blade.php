@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <center><h1>Daftar <small>Siswa</small></h1></center>
        <ol class="breadcrumb">
	        <center>
	        	Data Siswa
	        </center>
        </ol>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<table class="table table-striped">
			<tr class="default">
				<th>No.</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Jurusan</th>
				<th>Nama Sekolah</th>
				<th>Opsi</th>
				
				<center><a href="{{route('biodata.create')}}" class="btn btn-success"> Tambah Baru</a></center><br>

				<?php $no=1; ?>

				@foreach($biodatas as $biodata)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$biodata->nis}}</td>
						<td>{{$biodata->nama}}</td>
						<td>{{$biodata->tempat_lahir}}</td>
						<td>{{$biodata->tanggal_lahir}}</td>
						<td>{{$biodata->jenis_kelamin}}</td>
						<td>{{$biodata->alamat}}</td>
						<td>{{$biodata->jurusan}}</td>
						<td>{{$biodata->nama_sekolah}}</td>
						<td>
							<form class="" action="{{route('biodata.destroy',$biodata->id)}}" method="POST">
								<input type="hidden" name="_method" value="delete">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<a href="{{route('biodata.show',$biodata->id)}}" class="btn btn-warning">Lihat</a>
								<a href="{{route('biodata.edit',$biodata->id)}}" class="btn btn-primary">Edit</a>
								<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini');" name="name" value="Hapus">
							</form>	
						</td>
					</tr>
				@endforeach
			</tr>
		</table>
	</div>  
</div>
@endsection
