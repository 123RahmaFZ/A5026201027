@extends('layout.bahagia')
@section('Konten')
	<h3>Tampilkan detail keyboard</h3>

	<a href="/keyboard"> Kembali</a>

	<br/>
	<br/>


	@foreach($keyboard as $k)
	<div class="container-fluid">
        <div style="margin-left: 2cm; margin-right: 2cm;" class="card">
		{{ csrf_field() }}
        <div class="card-header text-center" style="font-size: 30px;">
            Form Tampilan keyboard
        </div>
        <div class="card-body">
            <div class="row">

                <label for="merkkeyboard" class="col-sm-3 col-form-label col-form-label-lg">Merek</label>
                    <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                   {{ $k->merkkeyboard }}
                </div>
            </div>
            <br>
            <div class="row">
                <label for="stockkeyboard" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    {{ $k->stockkeyboard }}
                </div>
            </div>
            <br>
            <div class="row">
                <label for="tersedia" class="col-sm-3 col-form-label col-form-label-lg">Tersedia</label>
                <span class="col-sm-1">:</span>
                <div class="col-sm-8">
                    @if ($k->tersedia == 'Y')
                Tersedia
            @else
            Tidak Tersedia
            @endif
                </div>
            </div>
            <br>

</div>
</div>
@endforeach


@endsection
