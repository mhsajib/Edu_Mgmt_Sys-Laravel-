<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo e(asset('/login/images/icons/favicon.ico')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/login/css/main.css')); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
				
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Passwor required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>

		<div>
		 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	       <p style="color: red"><?php echo e('*'.$err); ?></p> 
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         <p style="color: red">  <?php echo e(session('msg')); ?></p>
	   </div>
			</div>
		</div>
	</div>

	<div>
		
	</div>
	

	
	
<!--===============================================================================================-->
	<!-- <script src="<?php echo e(asset('/login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script> -->
<!--===============================================================================================-->
	<!-- <script src="<?php echo e(asset('/login/vendor/animsition/js/animsition.min.js')); ?>"></script> -->
<!--===============================================================================================-->
<!-- 	<script src="<?php echo e(asset('/login/vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('/login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script> -->
<!--===============================================================================================-->
	<!-- <script src="<?php echo e(asset('/login/vendor/select2/select2.min.js')); ?>"></script> -->
<!--===============================================================================================-->
<!-- 	<script src="<?php echo e(asset('/login/vendor/daterangepicker/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/login/vendor/daterangepicker/daterangepicker.js')); ?>"></script> -->
<!--===============================================================================================-->
<!-- 	<script src="<?php echo e(asset('/login/vendor/countdowntime/countdowntime.js')); ?>"></script> -->
<!--===============================================================================================-->
	<!-- <script src="<?php echo e(asset('/login/js/main.js')); ?>"></script> -->

	<!-- <div>
		   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	       <?php echo e($err); ?> <br>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div> -->

</body>
</html><?php /**PATH F:\ATP3\Final\finalProject\lar\resources\views/login/index.blade.php ENDPATH**/ ?>