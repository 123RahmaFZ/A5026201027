@extends('layout.bahagia')
@section('Konten')
	<h3>Edit keyboard</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>


	@foreach($keyboard as $k)
	<div class="container-fluid">
        <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
            <form id="kodekeyboard" class="row g-3" action="/keyboard/update" method="post">
		{{ csrf_field() }}
        <div class="card-header text-center" style="font-size: 30px;">
            Form Edit Keyboard
        </div>
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="kodekeyboard" value="{{ $k->kodekeyboard }}"> <br/>
                <label for="merkkeyboard" class="col-sm-3 col-form-label col-form-label-lg">Merek
                    </label>
                    <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg" id="merkkeyboard"
                        name="merkkeyboard" required="required" value="{{ $k->merkkeyboard }}">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="merkkeyboard" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg" id="stockkeyboard"
                         name="stockkeyboard" value="{{ $k->stockkeyboard }}">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="tersedia" class="col-sm-3 control-label">Ketersediaan</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="Y">
                        <input type="radio" id="Y" name="tersedia" value="Y">
                       Tersedia</label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="T">
                        <input type="radio" id="T" name="tersedia" value="T" >
                       Tidak tersedia</label><br>
                    </div>
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
