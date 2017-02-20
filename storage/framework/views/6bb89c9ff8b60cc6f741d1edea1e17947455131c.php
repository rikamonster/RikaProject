<?php $__env->startSection('content'); ?>
          <br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Detail Tunjangan</h2></center>
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
                <input type="text" class="form-control" id="isbn" placeholder="<?php echo e($data->Kode_tunjangan); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="<?php echo e($data->Jabatan->Nama_jabatan); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="<?php echo e($data->Golongan->Nama_golongan); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="<?php echo e($data->Status); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Jumlah Anak</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="<?php echo e($data->Jumlah_anak); ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Besaran Uang</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="<?php echo e($data->Besaran_uang); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="<?php echo e(url('Tunjangan')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.penggajian', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>