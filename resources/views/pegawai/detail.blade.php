@extends('layout.bahagia')
@section('Konten')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>


	@foreach($pegawai as $p)
	<div class="container-fluid">
        <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
		{{ csrf_field() }}
        <div class="card-header text-center" style="font-size: 30px;">
            Form Tampilan Data Pegawai
        </div>
        <div class="card-body">
            <div class="row">

                <label for="nama" class="col-sm-3 col-form-label col-form-label-lg">Nama</label>
                    <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                   {{ $p->pegawai_nama }}
                </div>
            </div>
            <br>
            <div class="row">
                <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Jabatan</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    {{ $p->pegawai_jabatan }}
                </div>
            </div>
            <br>
            <div class="row">
                <label for="jenisbarang" class="col-sm-3 col-form-label col-form-label-lg">Umur</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    {{ $p->pegawai_umur }}
                </div>
            </div>
            <br>
            <div class="row">
                <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Alamat</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
               {{ $p->pegawai_alamat }}
                </div>
            </div>

</div>
</div>
@endforeach


@endsection
