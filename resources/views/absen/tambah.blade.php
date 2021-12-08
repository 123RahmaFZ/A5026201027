@extends('layout.bahagia')
@section('Konten')
    <a href="/absen"> Kembali</a>

    <br />
    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container-fluid">

            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Pegawai </label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
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
                            <input type='text' class="form-control" name="Tanggal" required="required" />
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
            <label for="status" class="col-sm-3 control-label">Status</label>
            <span class="col-sm-1">:</span>
            <div class="col-sm-8">
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
                </div>
            </div>
                <input type="submit" class="btn btn-primary my-4 form-control" value="Simpan Data">

        </div>

    </form>
@endsection
