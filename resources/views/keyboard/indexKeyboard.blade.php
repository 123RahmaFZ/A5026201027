@extends('layout.bahagia')
@section('Konten')


	<h3>Keyboard</h3>



        <div class="row">
            <div class="col"><a class="btn btn-warning" href="/keyboard/tambah"> + Tambah</a></div>
            <div class="col d-flex justify-content-end">

                <form action="/keyboard/cari" method="GET">
                    <input type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
                    <input type="submit" class="btn btn-default" value="CARI">
                </form>
            </div>
        </div>


	<br/>
	<br/>

	<table class="table table-hover">
		<tr class="table-warning">
			<th>Merek</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($keyboard as $k)
		<tr>
			<div class="table-secondary">
			<td>{{ $k->merkkeyboard }}</td>
			<td>{{ $k->stockkeyboard }}</td>
            @if ($k->tersedia == 'Y')
                <td>Tersedia</td>
            @else
            <td>Tidak Tersedia</td>
            @endif
			</div>
			<td>
                <a href="/keyboard/view/{{ $k->kodekeyboard }}">View Detail</a>
                |
				<a href="/keyboard/edit/{{ $k->kodekeyboard}}">Edit</a>
				|
			<a href="/keyboard/hapus/{{ $k->kodekeyboard}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $keyboard->links()}}
@endsection
