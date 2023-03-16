<?php
include('../includes/connect.php');
include('../functions/common_function.php');

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

									<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

									<form class="mx-1 mx-md-4" action="" method="POST" enctype="multipart/form-data">

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-user fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="user_username">Your Name</label>
												<input require="require" name="user_username" type="text" id="user_username" class="form-control" />
											</div>
										</div>

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

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-key fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="cinf_user_password">Repeat your password</label>
												<input require="require" name="cinf_user_password" type="password" id="cinf_user_password" class="form-control" />
											</div>
										</div>

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-image fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="user_image">Your Image</label>
												<input require="require" name="user_image" type="file" id="user_image" class="form-control" />
											</div>
										</div>
										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-add fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="user_address">Your Address</label>
												<input require="require" name="user_address" type="text" id="user_address" class="form-control" />
											</div>
										</div>
										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-mobile fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="user_mobile">Your Mobile</label>
												<input require="require" name="user_mobile" type="number" min="0" id="user_mobile" class="form-control" />
											</div>
										</div>

										<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
											<input name="user_register" type="submit" class="btn btn-primary btn-lg" value="Register">
										</div>

										<div class="form-check d-flex justify-content-center mb-5">
											<label class="form-check-label" for="form2Example3">
												Don't have an account? <a href="user_login.php">Login</a>
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
if (isset($_POST['user_register'])) {
	$user_username = $_POST['user_username'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$conf_user_password = $_POST['cinf_user_password'];
	$hash_password = password_hash($user_password, PASSWORD_DEFAULT);
	$user_address = $_POST['user_address'];
	$user_mobile = $_POST['user_mobile'];
	$user_image = $_FILES['user_image']['name'];
	$user_image_tmp = $_FILES['user_image']['tmp_name'];
	$user_ip = getIPAddress();
	// get email
	$get_email = "select * from `user_table` where user_email = '$user_email'";
	$result_getEmail = mysqli_query($con, $get_email);
	$rows_counts = mysqli_num_rows($result_getEmail);
	if ($rows_counts > 0) {
		echo "<script>alert('Email already exits !!!')</script>";
	} else if ($user_password != $conf_user_password) {
		echo "<script>alert('Email or password not exactly !!!')</script>";
	} else {
		move_uploaded_file($user_image_tmp, "../admin/product_image/$user_image");
		$insert_query = "insert into `user_table` (username,user_email,user_password,user_img,user_ip,
	user_address,user_mobile) values ('$user_username', '$user_email', '$hash_password',
	'$user_image', '$user_ip', '$user_address', '$user_mobile')";
		$sql_execute = mysqli_query($con, $insert_query);
		if ($sql_execute) {
			echo "<script>alert('Data insert successfully !!!')</script>";
			echo "<script>window.open('user_login.php','_self');</script>";
		} else {
			echo "<script>('Data insert wrong !!!')</script>";
		}
	}

	// check cart
	$select_ip_items = "select * from `user_table` where ip_address = '$user_ip'";
	$result_cart = mysqli_query($con, $select_ip_items);
	$rows_check_cart = mysqli_num_rows($result_cart);
	if ($rows_check_cart > 0) {
		$_SESSION['user_email'] = $user_username;
		echo "<script>alert('You have items in your cart !!!')</script>";
		echo "<script>window.open('checkout.php','_self');</script>";
	} else {
		echo "<script>window.open('../index.php','_self');</script>";
	}
};

?>