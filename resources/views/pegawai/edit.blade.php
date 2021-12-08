@extends('layout.bahagia')
@section('Konten')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>


	@foreach($pegawai as $p)
	<div class="container-fluid">
        <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
            <form id="forms" class="row g-3" action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="card-header text-center" style="font-size: 30px;">
            Form Edit Data Pegawai
        </div>
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
                <label for="nama" class="col-sm-3 col-form-label col-form-label-lg">Nama
                    </label>
                    <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg" id="nama"
                        placeholder="" name="nama" required="required" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Jabatan</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg" id="jabatan"
                        placeholder="" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="jenisbarang" class="col-sm-3 col-form-label col-form-label-lg">Umur</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    <input type="number" class="form-control form-control-lg" id=""
                        placeholder="" name="umur" required="required" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Alamat</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                <textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea> <br/>
                </div>
            </div>

            <div class="row">
            <div class="col-3 ">
                <button  type="submit" class="btn btn-primary my-4 form-control" id="kirim" value="Simpan Data">Edit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endforeach


@endsection
