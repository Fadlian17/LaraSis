@extends ('layouts.app')

@section('content')
	<div class="container">
		<a href="{{ url('siswa/tambahSiswa') }}" class="btn btn-primary">Tambah</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Jurusan</th>
					<th>Kelas</th>
					<th>Aksi</th>
				</tr> 
			</thead>
			<tbody>
				@foreach($kelas as $key)
				<tr>
					<td>{{ $key->id }}</td>
					<td>{{ $key->Jurusan }}</td>
					<td>{{ $key->Kelas }}</td>
					<td><a href="{{ url('kelas/editKelas/'.$key->id) }}">Edit</a> <a href="{{ url('siswa/hapusKelas/'.$key->id) }}">Hapus</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection