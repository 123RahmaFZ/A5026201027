@extends('layout.bahagia')
@section('Konten')
	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
         <div class="container-fluid">

            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Pegawai </label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-3 control-label">Tanggal</label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="Tanggal" required="required" value="{{ $a->Tanggal }}" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>

        </div>
        <label for="Status" class="col-sm-3 control-label" style="margin-left: 4%">Status</label>
        <div class="col-sm-1">:</div>
        <div class="col-sm-7">
            <div class="form-check-inline">
                <label class="form-check-label" for="I">
                <input type="radio" id="I" name="Status" value="I">
               Izin</label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="S">
                <input type="radio" id="S" name="Status" value="S" >
               Sakit</label><br>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="A">
                <input type="radio" id="A" name="Status" value="A"  >
                Alpha</label>
            </div>
        </div>
    </div>


		<input type="submit" class="btn btn-primary my-4 form-control" value="Simpan Data">
        </div>

	</form>
	@endforeach

    @endsection
