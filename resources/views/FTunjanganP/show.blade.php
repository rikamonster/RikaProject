@extends('layouts.app')

@section('content')
          <br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Detail Tunjangan Pegawai</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal">
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Kode Tunjangan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Tunjangans->Kode_tunjangan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">NIP</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Pegawai->Nip}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Pegawai->User->name}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Besaran Uang</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Tunjangans->Besaran_uang}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('TunjanganP')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    
@endsection
