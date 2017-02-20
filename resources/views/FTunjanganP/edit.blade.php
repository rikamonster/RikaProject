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
                    <center><h2>Edit Data Tunjangan Pegawai</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
    {!! Form::model($data,['method' => 'PATCH','route'=>['TunjanganP.update',$data->id],'class' => 'form-horizontal form-label-left']) !!}
    <div id="pegawai">
<div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            {!! Form::label('Kode Tunjangan', 'Kode Tunjangan ') !!}
             <span class="required">*</span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Kode_tunjangan_id">
            @foreach($tp as $data)
                <option value="{{$data->id}}">{{$data->Kode_tunjangan}}</option>
            @endforeach
            </select>
        </div>
    </div>
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Pegawai ', 'Pegawai ') !!}
               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Pegawai_id">
            @foreach($pegawai as $data)
                <option value="{{$data->id}}">{{$data->User->name}}</option>
            @endforeach
            </select>
        </div>
      </div>
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              {!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
          </div>
      </div>
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>

@endsection