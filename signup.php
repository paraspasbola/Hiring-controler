<!--connection with database--->
<?php
require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registration page</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="assets/js/app.js"></script>

	<!-- /core JS files -->

	<style>
		.signin-btn a {
			padding-left: 40%;
		}
	</style>

</head>

<body>


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Registration form -->
					<form action="save_data.php" class="flex-fill" method="post" onsubmit="return validateForm()" name="myForm">
						<div class="row">
							<div class="col-lg-6 offset-lg-3">
								<div class="card mb-0">
									<div class="card-body">
										<div class="text-center mb-3">
											<!-- <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-pill p-3 mb-3 mt-1"></i> -->
											<h2 class="mb-0">Tree Multisoft Services</h2>
											<h5 class="mb-0">Create account</h5>
											<span class="d-block text-muted text-danger">All fields are required</span>
										</div>
										
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right" id="first_name">
													<input type="text" class="form-control" placeholder="First name" name="first_name" autofocus value="" required>
													<b><span class="formerror text-danger"> </span></b>
													
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right" id="last_name">
													<input type="text" class="form-control" placeholder="Last name" name="last_name" required>
													<b><span class="formerror text-danger"> </span></b>
													
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right" id="password">
													<input type="password" class="form-control" placeholder="Create password" name="password" id="password" value="" required>
													<b><span class="formerror text-danger"> </span></b>
													
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right" id="confirm_password">
													<input type="password" class="form-control" placeholder="Repeat password" name="confirm_password" required>
													<b><span class="formerror text-danger"> </span></b>
													
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right" id="email">
													<input type="email" class="form-control" placeholder="Your email" name="email" required>
													<b><span class="formerror text-danger"> </span></b>
													
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right" id="phone_number">
													<input type="number" class="form-control" placeholder="Mobile Number" name="phone_number" required>
													<b><span class="formerror text-danger"> </span></b>
													
												</div>
											</div>
										</div>


									</div>

									<div class="card-footer bg-transparent text-right sign-btn">
										<button type="submit" class="btn btn-teal text-align-center" name="get_regestered">
											Create account</button>
									</div>
									<div class="form-group signin-btn">
										<a href="index.php">Alredy have account</a>
									</div>

								</div>
							</div>
						</div>
					</form>
					<!-- /registration form -->
					<script>
						function clearErrors() {

							errors = document.getElementsByClassName('formerror');
							for (let item of errors) {
								item.innerHTML = "";
							}


						}

						function seterror(id, error) {
							//sets error inside tag of id 
							element = document.getElementById(id);
							element.getElementsByClassName('formerror')[0].innerHTML = error;

						}

						function validateForm() {
							var returnval = true;
							clearErrors();

							//perform validation and if validation fails, set the value of returnval to false
							var first_name = document.forms['myForm']["first_name"].value;
							if (first_name.length < 5) {
								seterror("first_name", "*Length of name is too short");
								returnval = false;
							}
							var last_name = document.forms['myForm']["last_name"].value;
							if (last_name.length < 5) {
								seterror("last_name", "*Length of name is too short");
								returnval = false;
							}

							
							var email = document.forms['myForm']["email"].value;
							if (email.length > 15) {
								seterror("email", "*Email length is too long");
								returnval = false;
							}

							var phone_number = document.forms['myForm']["phone_number"].value;
							if (phone_number.length != 10) {
								seterror("phone_number", "*Phone number should be of 10 digits!");
								returnval = false;
							}

							var password = document.forms['myForm']["password"].value;
							if (password.length < 6) {

								// Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
								seterror("password", "*Password should be atleast 6 characters long!");
								returnval = false;
							}

							var confirm_password = document.forms['myForm']["confirm_password"].value;
							if (confirm_password != password) {
								seterror("confirm_password", "*Password and Confirm password should match!");
								returnval = false;
							}

							return returnval;
						}
					</script>

				</div>
				<!-- /content area -->



</body>

</html>
<!--/foooter-->

<?php
include "footer.php";
?>

<!--/footer end-->