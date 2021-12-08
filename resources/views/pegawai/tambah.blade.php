@extends('layout.bahagia')
@section('Konten')
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/pegawai/store" method="post">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Tambah Data Pegawai
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="namabarang" class="col-sm-3 col-form-label col-form-label-lg">Nama
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="nama"
                                    placeholder="" name="nama" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Jabatan</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="harga"
                                    placeholder="" name="jabatan">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="jenisbarang" class="col-sm-3 col-form-label col-form-label-lg">Umur</label>
							<span class="col-sm-1">:</span>
							<div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id=""
                                    placeholder="" name="umur" required="required">
                            </div>
                        </div>
                        <br>
						<div class="row">
                            <label for="barcode" class="col-sm-3 col-form-label col-form-label-lg">Alamat</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
							<textarea name="alamat" required="required"></textarea> <br/>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary my-4 form-control" id="kirim" value="Simpan Data">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
