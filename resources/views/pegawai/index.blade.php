@extends('layout.bahagia')
@section('Konten')



	<h3>Data Pegawai</h3>

	<div class="row">
        <div class="col"><a class="btn btn-warning" href="/keyboard/tambah"> + Tambah</a></div>
        <div class="col d-flex justify-content-end">

            <form action="/pegawai/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>
        </div>
    </div>

	<br/>
	<br/>


	<table class="table table-hover">
		<tr class="table-warning">
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
		<div class="table-secondary">
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			</div>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}
 @endsection

