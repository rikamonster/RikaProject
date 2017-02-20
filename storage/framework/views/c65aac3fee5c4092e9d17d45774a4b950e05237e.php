<?php $__env->startSection('content'); ?>

<br><br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Input Penggajian</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <?php echo Form::open(['url' => 'Penggajians', 'class' => 'form-horizontal form-label-left']); ?>

    <div id="pegawai">
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              <?php echo Form::label('Tunjangan Pegawai', 'Tunjangan Pegawai '); ?>

               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Tunjangan_pegawai_id">
            <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_tunjangan_id); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
      </div>
     <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo Form::label('Jumlah Jam', 'Jumlah Jam '); ?>

             <span class="required">*</span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
           <?php echo Form::number('Jumlah_jam_lembur',null,['class'=>'form-control col-md-7 col-xs-12']); ?>

              <h4 class="text-danger"><?php echo '<br><br>'.$errors->first('NamaPoli', '<p>Form input harus diisi!!</p>') ?></h4>
        </div>
    </div>
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              <?php echo Form::label('Jumlah Uang Lembur', 'Jumlah Uang Lembur'); ?>

               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo Form::number('Jumlah_uang_lembur',null,['class'=>'form-control col-md-7 col-xs-12']); ?>

              <h4 class="text-danger"><?php echo '<br><br>'.$errors->first('NamaPoli', '<p>Form input harus diisi!!</p>') ?></h4>
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              <?php echo Form::label('Gaji Pokok', 'Gaji Pokok'); ?>

               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo Form::number('Gaji_pokok',null,['class'=>'form-control col-md-7 col-xs-12']); ?>

              <h4 class="text-danger"><?php echo '<br><br>'.$errors->first('NamaPoli', '<p>Form input harus diisi!!</p>') ?></h4>
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              <?php echo Form::label('Total Gaji', 'Total Gaji'); ?>

               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo Form::number('Total_gaji',null,['class'=>'form-control col-md-7 col-xs-12']); ?>

              <h4 class="text-danger"><?php echo '<br><br>'.$errors->first('NamaPoli', '<p>Form input harus diisi!!</p>') ?></h4>
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              <?php echo Form::label('Tanggal Pengambilan', 'Tanggal Pengambilan'); ?>

               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo Form::date('Tanggal_pengambilan',null,['class'=>'form-control col-md-7 col-xs-12']); ?>

              <h4 class="text-danger"><?php echo '<br><br>'.$errors->first('NamaPoli', '<p>Form input harus diisi!!</p>') ?></h4>
          </div>
      </div>
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              <?php echo Form::label('Status Pengambilan', 'Status Pengambilan'); ?>

               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
               <select class="form-control" name="Status" id="Status" required>
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              <?php echo Form::label('Petugas Penerima', 'Petugas Penerima'); ?>

               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo Form::text('Petugas_penerima',null,['class'=>'form-control col-md-7 col-xs-12']); ?>

              <h4 class="text-danger"><?php echo '<br><br>'.$errors->first('NamaPoli', '<p>Form input harus diisi!!</p>') ?></h4>
          </div>
      </div>
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <?php echo Form::submit('Save', ['class' => 'btn btn-success form-control']); ?>

          </div>
      </div>
    </div>
    <?php echo Form::close(); ?>

               
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.penggajian', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>