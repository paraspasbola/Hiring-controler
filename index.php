
<?php
session_start();

if(isset($_SESSION['name'])){
	echo '<script>window.location.assign("dashboard.php")</script>';
}
else{


require_once('login_emailpass_check.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Login page</title>
	<link rel="icon" type="image/x-icon" href="../treemultisoft_carrer_penel/images/favicon.png">


	<!-- Global stylesheets -->
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="CSS/external.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
     <?php
	//  include "header.php";
	 ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					
					<form class="login-form" action="signup.php" method="post">
					
						<div class="card mb-0">
							<div class="card-body">
							<div class="form-group signup-btn">
									<a href="signup.php">Sign up</a>
								</div>
								<div class="text-center mb-3">
									<img class="profile" src="images/login_logo.png" height="75px" width="75px" alt="logo">
									<h5 class="mb-0">Sign in to your account</h5>
									<span class="d-block text-muted">Enter your credentials below</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="email" class="form-control" id="email" placeholder="Username" name ="email" required autofocus>
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control"id="password" placeholder="Password" name="pwd" required>
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block" name="sign_in_btn">Sign in</button>
								</div>

								<div class="text-center">
									<a href="login_password_recover.html">Forgot password?</a>
								</div>
								
							</div>
						</div>
					</form>
					
								
                                
					
					<!-- /login form -->

				</div>
				<!-- /content area -->

				<?php 
				 	// include "footer.php";
				?>	
				
			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>

<?php

}

?>
