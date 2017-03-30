@extends('layout.tampilan')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Tampilan Data</h1>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Data Peserta</center></div>
                <div class="panel-body"><br><br>
                	<ul>
						<b>NIS</b>&nbsp;&nbsp; : &nbsp;&nbsp;{{$biodata->nis}}<br>
						<b>Nama</b>&nbsp;&nbsp; : &nbsp;&nbsp;{{$biodata->nama}}<br>
						<b>Tempat Lahir</b>&nbsp; : &nbsp;&nbsp;&nbsp;{{$biodata->tempat_lahir}}<br>
						<b>Tanggal Lahir</b>&nbsp;&nbsp; : &nbsp;&nbsp;{{$biodata->tanggal_lahir}}<br>
						<b>Jenis Kelamin</b>&nbsp;&nbsp; : &nbsp;&nbsp;{{$biodata->jenis_kelamin}}<br>
						<b>Alamat</b>&nbsp;&nbsp; : &nbsp;&nbsp;{{$biodata->alamat}}<br>
						<b>Jurusan</b>&nbsp;&nbsp; : &nbsp;&nbsp;{{$biodata->jurusan}}<br>
						<b>Nama Sekolah</b>&nbsp; : &nbsp;&nbsp;&nbsp;{{$biodata->nama_sekolah}}<br>
					</ul><br><br>
					<a href="{{route('biodata.index')}}" class="btn btn-default pull-right"><i class="fa fa-arrow-left"> Kembali</i></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
