<?php $__env->startSection('content'); ?>

<div class="panel panel-success">
		<div class="panel-heading">List Pendaki</div>

		<div class="panel-body">

		<div class='table-responsive'>
		<form action="/view" method="post" onsubmit="return showLoad('Delete stock?')">
		  <table class='table table-bordered table-hover'>
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>TYPE</th>
		        <th>NAME/DESCRIPTION</th>
		        <th>STOCK IMAGE</th>
		        <th>SIZE</th>
		        <th>QUANTITY</th>
		        <th>ACTION</th>
		      </tr>
		    </thead>
		    <tbody>
			<!-- iterate through the array of the stocks to display them -->
			<?php $__currentLoopData = $liststock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liststocks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($liststocks->id); ?></td>
					<td><?php echo e($liststocks->stk_type); ?></td>
					<td><?php echo e($liststocks->stk_name); ?></td>
					<td><img src='<?php echo e(asset("storage/images/$liststocks->id.jpg")); ?>' width="150px" height="150px" class="img-thumbnail img-responsive" title="<?php echo e($liststocks->stk_name.' '.$liststocks->stk_type); ?>"/></td>
					<td><?php echo e($liststocks->stk_size); ?></td>
					<td><?php echo e($liststocks->stk_qty); ?></td>


					<td align="center"><a href='/edit/<?php echo e($liststocks->id); ?>' data-toggle="tooltip" title="Update Stock" class='btn btn-success' onclick='return confirm("Edit stock?");'><i class='fa fa-fw fa-gear'></i></a>
					<button type='submit' class='btn btn-danger' data-toggle="tooltip" title="Delete Stock"><i class='fa fa-fw fa-trash'></i></button></td>
					<td style='display:none;'><input type='text' name='delstock' value='<?php echo e($liststocks->id); ?>' style='display:none;'></td>
					<?php echo e(csrf_field()); ?>

				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</tbody>
				</table>
				</form>
				<!-- generate markup for pagination links -->
				<center><?php echo e($liststock->links()); ?></center>
			</div>
		</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>