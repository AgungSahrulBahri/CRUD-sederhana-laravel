<?php $__env->startSection('content'); ?>

<div class="panel panel-success">
		<div class="panel-heading">Search Pendaki</div>
		<form action="/search" method="get" onsubmit="return showLoad()">
		<div class="panel-body">
			<label class="label-control">Pendaki Name</label> 
			<input type="text" name="sname" class="form-control" placeholder="Please input pendaki name/description" required="required">
			<br>
		
	</div>
	<div class="panel-footer">
		<button type="submit" class="btn btn-success">Search</button>
	</div>
	</form>
</div>

<!-- check if $search variable is set, display search result -->
<?php if(isset($search)): ?>
	<div class="panel panel-success">
		<div class="panel-heading">Search Result</div>
		<div class="panel-body">

			<div class='table-responsive'>
			  <table class='table table-bordered table-hover'>
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>TYPE</th>
			        <th>NAME/DESCRIPTION</th>
			        <th>SIZE</th>
			        <th>QUANTITY</th>
			      </tr>
			    </thead>
			    <tbody>

				<?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
					<tr>
						<td><?php echo e($searchs->id); ?></td>
						<td><?php echo e($searchs->stk_type); ?></td>
						<td><?php echo e($searchs->stk_name); ?></td>
						<td><?php echo e($searchs->stk_size); ?></td>
						<td><?php echo e($searchs->stk_qty); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</tbody>
					</table>
					<center><?php echo e($search->appends(Request::only('sname'))->links()); ?></center>
				</div>

		</div>
		<div class="panel-footer">
			<a href="<?php echo e(url('/search')); ?>" class="btn btn-warning">Reset Search</a>
		</div>
	</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>