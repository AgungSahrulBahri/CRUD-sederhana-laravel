<?php $__env->startSection('content'); ?>

 <!-- display success message -->
<?php if(Session::has('message')): ?>
   <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<div class="panel panel-success">
		<div class="panel-heading">Insert Pendaki</div>
		<form action="/home" method="post" enctype="multipart/form-data" onsubmit="return showLoad('Insert Data?')">
		<?php echo e(csrf_field()); ?>

		<div class="panel-body">

      <div class="form-group <?php echo e($errors->has('stype') ? 'has-error' : ''); ?>">
  			<label class="label-control">Pendaki Type</label>
  			<select name="stype" class="form-control" >
  				<option value=''>Please choose pendaki type</option>
  				<option value='T-Shirt'>T-Shirt</option>
  				<option value='Sweater'>Sweater</option>
  				<option value='Jacket'>Jacket</option>
  				<option value='Formal Shirt'>Formal Shirt</option>
  			</select>
         <?php if($errors->has('stype')): ?>
            <span class="help-block alert alert-danger">
                <strong><?php echo e($errors->first('stype')); ?></strong>
            </span>
        <?php endif; ?>
      </div>

      <div class="form-group <?php echo e($errors->has('sname') ? 'has-error' : ''); ?>">
  			<label class="label-control">Description</label>
  			<input type="text" name="sname" class="form-control" placeholder="Please input pendaki name/description" value="<?php echo e(old('sname')); ?>" required="required">
  			<?php if($errors->has('sname')): ?>
            <span class="help-block alert alert-danger">
                <strong><?php echo e($errors->first('sname')); ?></strong>
            </span>
        <?php endif; ?>
    </div>

			<div class="row">
				<div class="col-md-3">
          <div class="form-group <?php echo e($errors->has('ssize') ? 'has-error' : ''); ?>">
  					<label class="label-control">Pendaki Size</label>
  					<select name="ssize" class="form-control" required="required">
  						<option value=''>Please choose pendaki size</option>
  						<option value='S'>S</option>
  						<option value='M'>M</option>
  						<option value='L'>L</option>
  						<option value='XL'>XL</option>
  					</select>
  					<?php if($errors->has('ssize')): ?>
                <span class="help-block alert alert-danger">
                    <strong><?php echo e($errors->first('ssize')); ?></strong>
                </span>
            <?php endif; ?>
          </div>
				</div>


				<div class="col-md-2">
          <div class="form-group <?php echo e($errors->has('squantity') ? 'has-error' : ''); ?>">
  					<label class="label-control">Pendaki Quantity</label>
  					<input type="number" name="squantity" class="form-control" required="required" placeholder="Insert quantity" value="<?php echo e(old('sname')); ?>">
  					<?php if($errors->has('squantity')): ?>
                <span class="help-block alert alert-danger">
                    <strong><?php echo e($errors->first('squantity')); ?></strong>
                </span>
            <?php endif; ?>
          </div>
				</div>
			</div>
			<br>


			<div class="row">
				<div class="col-md-5">
          <div class="form-group <?php echo e($errors->has('fileUpload') ? 'has-error' : ''); ?>">
  					<label class="label-control">Upload Photo</label>
  					<input type="file" name="fileUpload" class="form-control fileinput" data-show-upload="false" required="required">
  					<i>Note: Only jpg,jpeg,png file allowed. Max size: 3MB</i>
  					<?php if($errors->has('fileUpload')): ?>
                <span class="help-block alert alert-danger">
                    <strong><?php echo e($errors->first('fileUpload')); ?></strong>
                </span>
            <?php endif; ?>
          </div>
				</div>
			</div>
			<br>

	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success">Insert</button>
		<button type="reset" name="reset" class="btn btn-warning" onclick="return confirm('Reset/clear form?');">Reset</button>
	</div>
	</form>
</div>

<?php $__env->startPush('scripts'); ?>
  <script type="text/javascript">
  	// for bootstrap file input
  	$(function(){
  		 $("input.fileinput").fileinput({
              allowedFileExtensions: ["jpg", "jpeg" , "png"], // set allowed file format
              maxFileSize: 3000, //set file size limit, 1000 = 1MB
          });
  	});
  </script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>