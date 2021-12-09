@extends('layout.bahagia')
@section('Konten')

	<h3>Data Absen</h3>

	<a class="btn btn-warning" href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table class="table table-hover">
		<tr class="table-warning">
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<div class="table-secondary">
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			</div>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links()}}
@endsection
