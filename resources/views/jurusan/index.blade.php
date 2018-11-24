@extends('layouts.app')

@section('content')
	<div class="container">
		<a href="{{url('jurusan/tambahJurusan')}}" class="btn btn-primary">Tambah</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Kajur</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($jurusan as $key)
				<tr>
					<td>{{ $key->id }}</td>
					<td>{{ $key->Nama }}</td>
					<td>{{ $key->Jumlah_siswa}}</td>
					<td>{{ $key->Kajur }}</td>
					<td><a href="{{url('jurusan/editJurusan/'.$key->id)}}">Edit</a> <a href="{{url('jurusan/hapusJurusan/'.$key->id)}}">Hapus</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection