@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('siswa/simpanSiswa') }}">
			@csrf
			<p>NIS</p>
			<input type="number" name="NIS" placeholder="NIS">
			<p>Nama</p>
			<input type="text" name="Nama" placeholder="Nama">
			<p>Kelas</p>
			<input type="text" name="Kelas" placeholder="Kelas">
			<p>Jurusan</p>
			<input type="text" name="Jurusan" placeholder="Jurusan">
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
@endsection