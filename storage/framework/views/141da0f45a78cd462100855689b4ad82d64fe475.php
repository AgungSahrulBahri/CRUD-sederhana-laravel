<!DOCTYPE html>
<html>
<head>
	<title>Admin Pendakian</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/design.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/fileinput.min.css')); ?>">
</head>
<body>

	<!-- nav bar-->
	<div class="navbar navbar-default">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	     <a class="navbar-brand" href="#">Admin Pendakian</a>
	    </div>

	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li <?php echo e((Request::is('home') ? 'class=active' : '')); ?>><a href="/home" >Insert Pendaki</a></li>
	        <li <?php echo e((Request::is('view') ? 'class=active' : '')); ?>><a href="/view" >View Pendaki</a></li>
	        <li <?php echo e((Request::is('search') ? 'class=active' : '')); ?>><a href="/search" >Search Pendaki</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo e(url('/logout')); ?>"
	                  onclick="event.preventDefault();
	                           document.getElementById('logout-form').submit();">
	                  Logout
	              </a>

	              <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
	                  <?php echo e(csrf_field()); ?>

	              </form>
	            </li>
	          </ul>
	        </li>
	    </div><!--/.nav-collapse -->

	</div>



<div class="container">

	<?php echo $__env->yieldContent('content'); ?>

</div>

<div class="footer" style="text-align:center">
Copyright by Agung Sahrul Bahri | 6A | ASB
</div>

<div class="overlay">
  <div class="popup">
		<div class="sk-folding-cube">
		  <div class="sk-cube1 sk-cube"></div>
		  <div class="sk-cube2 sk-cube"></div>
		  <div class="sk-cube4 sk-cube"></div>
		  <div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
</div>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/fileinput.min.js')); ?>"></script>

<script>

	$(document).ready(function(){

		//hide loading animation
		$('.overlay').hide();
		$('.sk-folding-cube').hide();

	 });

	// when called, will show loading animation
	function showLoad($msg)
	{
		if($msg != null)
			return confirm($msg);
		$('.overlay').show();
		$('.sk-folding-cube').show();
	}

</script>

<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
