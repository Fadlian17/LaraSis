@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('kelas/simpanKelas') }}">
			@csrf
			<p>Jurusan</p>
			<input type="text" name="Jurusan" placeholder="Jurusan">
			<p>Kelas </p>
			<input type="text" name="Kelas" placeholder="Kelas">
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
@endsection