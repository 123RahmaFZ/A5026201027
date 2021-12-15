@extends('layout.bahagia')
@section('Konten')
	<h3>Data Belanja</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<div class="container-fluid">
            <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
                <form id="forms" class="row g-3" action="/keranjangbelanja/store" method="post">
				{{ csrf_field() }}
                    <div class="card-header text-center" style="font-size: 30px;">
                        Form Tambah Data Belanja
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="KodeBarang" class="col-sm-3 col-form-label col-form-label-lg">Kode Barang
                                </label>
								<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="KodeBarang"
                                    placeholder="" name="KodeBarang" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Jumlah" class="col-sm-3 col-form-label col-form-label-lg">Jumlah</label>
							<span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Jumlah"
                                    placeholder="" name="Jumlah">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Harga" class="col-sm-3 col-form-label col-form-label-lg">Harga</label>
							<span class="col-sm-1">:</span>
							<div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="Harga"
                                    placeholder="" name="Harga" required="required">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary my-4 form-control" id="kirim" value="Simpan Data">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
