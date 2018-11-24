@extends ('layouts.app')

@section('content')
	<div class="container">
		<a href="{{ url('siswa/tambahSiswa') }}" class="btn btn-primary">Tambah</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr> 
			</thead>
			<tbody>
				@foreach($siswa as $key)
				<tr>
					<td>{{ $key->id }}</td>
					<td>{{ $key->NIS }}</td>
					<td>{{ $key->Nama }}</td>
					<td>{{ $key->Kelas }}</td>
					<td>{{ $key->Jurusan }}</td>
					<td><a href="{{ url('siswa/editSiswa/'.$key->id) }}">Edit</a> <a href="{{ url('siswa/hapusSiswa/'.$key->id) }}">Hapus</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection