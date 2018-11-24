@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('kelas/updateKelas/'.$siswa->id) }}">
			@csrf
			<p>Jurusan</p>
			<input type="text" name="Jurusan" placeholder="Jurusan" value="{{$kelas->Jurusan}}">
			<p>Kelas</p>
			<input type="text" name="Kelas" placeholder="Kelas" value="{{$kelas->Kelas}}">
			<button type="submit" class="btn btn-primary">Ubah</button>
		</form>
	</div>
@endsection