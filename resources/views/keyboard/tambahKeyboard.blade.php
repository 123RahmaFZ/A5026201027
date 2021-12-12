@extends('layout.bahagia')
@section('Konten')
    <a href="/keyboard"> Kembali</a>

    <br />
    <br />

    <form action="/keyboard/store" method="post">
        {{ csrf_field() }}
        <div class="container-fluid">

            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="merkkeyboard" class="col-sm-3 control-label">Merek </label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='merkkeyboard'>
                            <input type="text" class="form-control" id="merkkeyboard" name="merkkeyboard" required="required">
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="stockkeyboard" class="col-sm-3 control-label">Stock</label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group' id='stockkeyboard'>
                            <input type='number' class="form-control" name="stockkeyboard"  />
                        </div>
                    </div>
                </div>
            </div>
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
                </div>
            </div>
                <input type="submit" class="btn btn-primary my-4 form-control" value="Simpan Data">

        </div>

    </form>
@endsection
