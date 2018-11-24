@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('jurusan/simpanJurusan') }}">
			@csrf
			<p>Nama Jurusan</p>
			<input type="text" name="Nama" placeholder="Nama">
			<p>Jumlah Siswa</p>
			<input type="number" name="Jumlah_siswa" placeholder="Jumlah">
			<p>Kepala Jurusan</p>
			<input type="text" name="Kajur" placeholder="Kepala Jurusan">
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
@endsection