@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('jurusan/updateJurusan/'.$jurusan->id) }}">
			@csrf
			<p>Nama</p>
			<input type="text" name="Nama" placeholder="Nama" value="{{$jurusan->Nama}}">
			<p>Jumlah Siswa</p>
			<input type="number" name="Jumlah" placeholder="Jumlah" value="{{$jurusan->Jumlah_siswa}}">
			<p>Kepala Jurusan</p>
			<input type="text" name="Jurusan" placeholder="Kajur" value="{{$jurusan->Kajur}}">
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
@endsection