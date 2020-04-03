<?php $__env->startSection('content'); ?>

 <!-- display success message -->
<?php if(Session::has('message')): ?>
   <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<div class="panel panel-success">
		<div class="panel-heading">Edit Pendaki</div>
		<form action="/update" method="post" onsubmit="return showLoad('Update Data?')">
      <?php echo e(csrf_field()); ?>

		<div class="panel-body">

      <div class="form-group <?php echo e($errors->has('stype') ? 'has-error' : ''); ?>">
  			<label class="label-control">pendaki type</label>
  			<select name="stype" class="form-control" required="required">
  				<option value=''>Please choose pendaki type</option>
  			<?php

  				$types = array('T-Shirt','Sweater','Jacket','Formal Shirt');

  				foreach($types as $types)
  				{
  					if($editstock->stk_type == $types)
  					{
  						echo "<option value='$types' selected>$types</option>";
  					}
  					else
  					{
  						echo "<option value='$types'>$types</option>";
  					}
  				}
  			?>
  			</select>
  			<?php if($errors->has('stype')): ?>
            <span class="help-block alert alert-danger">
                <strong><?php echo e($errors->first('stype')); ?></strong>
            </span>
        <?php endif; ?>
			</div>

      <div class="form-group <?php echo e($errors->has('sname') ? 'has-error' : ''); ?>">
  			<label class="label-control">Description</label>
  			<input type="text" name="sname" class="form-control" placeholder="Please input pendaki name/description" required="required" value="<?php echo e($editstock->stk_name); ?>">
  			<?php if($errors->has('sname')): ?>
            <span class="help-block alert alert-danger">
                <strong><?php echo e($errors->first('sname')); ?></strong>
            </span>
        <?php endif; ?>
			</div>

			<div class="col-md-3">
        <div class="form-group <?php echo e($errors->has('ssize') ? 'has-error' : ''); ?>">
    			<label class="label-control">Pendaki Size</label>
    			<select name="ssize" class="form-control" required="required">
    				<option value=''>Please choose pendaki size</option>
    				<?php
    					$size = array('S','M','L','XL');
    					foreach($size as $size)
    					{
    						if($editstock->stk_size == $size)
    						{
    							echo "<option value='$size' selected>$size</option>";
    						}
    						else
    						{
    							echo "<option value='$size'>$size</option>";
    						}
    					}
    				?>
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
    			<input type="number" name="squantity" class="form-control" required="required" placeholder="Insert quantity" value="<?php echo e($editstock->stk_qty); ?>">
    			<?php if($errors->has('squantity')): ?>
              <span class="help-block alert alert-danger">
                  <strong><?php echo e($errors->first('squantity')); ?></strong>
              </span>
          <?php endif; ?>
        </div>
      </div>
			<br>

			<input type = "hidden" name = "sid" value = "<?php echo e($editstock->id); ?>">

	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success">Update</button>
	</div>
	</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>