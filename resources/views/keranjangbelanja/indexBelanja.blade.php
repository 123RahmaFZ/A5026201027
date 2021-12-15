@extends('layout.bahagia')
@section('Konten')


	<h3>keranjang </h3>
    <a class="btn btn-primary"  href="/keranjangbelanja/tambah"> Beli</a>

	<br/>
	<br/>

	<table class="table table-hover">
		<tr class="table-warning">
			<th>Kode Barang</th>
			<th>Jumlah</th>
			<th>Harga Per Item</th>
            <th>Harga Total</th>
			<th>Opsi</th>
		</tr>
		@foreach($keranjangbelanja as $b)
		<tr>
			<div class="table-secondary">
			<td>{{ $b->KodeBarang }}</td>
			<td>{{ $b->Jumlah }}</td>
            <td> Rp.
                @php
                    $price = $b->Harga;
                    echo number_format($price);
                @endphp
            </td>
            <td> Rp.
                 @php
                $total= $b-> Jumlah * $b->Harga;
                echo number_format($total);
                @endphp
                </td>
			</div>
			<td>

			<a href="/keranjangbelanja/hapus/{{ $b->ID}}">Batal</a>


			</td>
		</tr>
		@endforeach
	</table>
    {{ $keranjangbelanja->links()}}
@endsection
