<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website thương mại</title>
	<link href="../css/index.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<section class="vh-100" style="background-color: #eee;">
		<div class="container h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-lg-12 col-xl-11">
					<div class="card text-black" style="border-radius: 25px;">
						<div class="card-body p-md-5">
							<div class="row justify-content-center">
								<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

									<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

									<form class="mx-1 mx-md-4" action="" method="POST">

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="user_email">Your Email</label>
												<input require="require" name="user_email" type="email" id="user_email" class="form-control" />
											</div>
										</div>

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="name=user_password">Password</label>
												<input require="require" name="user_password" type="password" id="name=user_password" class="form-control" />
											</div>
										</div>

										<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
											<input name="user_login" type="submit" class="btn btn-primary btn-lg" value="Login">
										</div>

										<div class="form-check d-flex justify-content-center mb-5">
											<label class="form-check-label" for="form2Example3">
												Already have an account? <a href="user_register.php">Register</a>
											</label>
										</div>

									</form>

								</div>
								<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

									<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['user_login'])) {
	// $user_username = $_POST['user_username'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$user_ip = getIPAddress();

	// get email
	$get_email = "select * from `user_table` where user_email = '$user_email'";
	$result_getEmail = mysqli_query($con, $get_email);
	$rows_counts = mysqli_num_rows($result_getEmail);
	$rows_data = mysqli_fetch_assoc($result_getEmail);

	// cart
	$get_ip_address = "select * from `cart_details` where ip_address = '$user_ip'";
	$result_ip = mysqli_query($con, $get_ip_address);
	$rows_ip_cart = mysqli_num_rows($result_ip);
	if ($rows_counts > 0) {
		$_SESSION['user_email'] = $user_email;
		if (password_verify($user_password, $rows_data['user_password'])) {
			if ($rows_counts == 1 and $rows_ip_cart == 0) {
				$_SESSION['user_email'] = $user_email;

				echo "<script>alert('Login successfully !!!')</script>";
				echo "<script>window.open('../index.php','_self');</script>";
			} else {
				$_SESSION['user_email'] = $user_email;

				echo "<script>alert('Login successfully !!!')</script>";
				echo "<script>window.open('payment.php','_self');</script>";
			}
		} else {
			echo "<script>alert('Email or password not exactly !!!')</script>";
		}
	} else {
		echo "<script>alert('Invalid credentials !!!')</script>";
	}
};

?>