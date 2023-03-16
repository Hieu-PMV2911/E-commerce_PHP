<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
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
	<div class=" container-fluid p-0">
		<!-- first child -->
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container-fluid">
				<a class="navbar-brand" style="width: 200px; margin-left: 60px; text-align: center; color:white" href="index.php">
					<img src="../images/logo.jpg" style="width: 55px; height: 55px; border-radius:50%" alt="">
					Abaha
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" style="text-align: center; margin-left: 20rem" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item" style="width: 100px">
							<a class="nav-link" aria-current="page" href="../index.php">Home</a>
						</li>
						<li class="nav-item" style="width: 100px">
							<a class="nav-link" href="../display_all.php">Products</a>
						</li>
						<li class="nav-item" style="width: 100px">
							<a class="nav-link active" href="../about.php">About</a>
						</li>
						<li class="nav-item" style="width: 100px">
							<a class="nav-link" href="../contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<section style="background-color: #eee;">
		<div class="row" style="margin: 5px 0;">
			<div class="col-lg-4">
				<div class="card mb-4">
					<div class="card-body text-center">
						<?php $useremail = $_SESSION['user_email'];
						$usereimage = "select * from `user_table` where user_email='$useremail'";
						$result_image = mysqli_query($con, $usereimage);
						$row_image = mysqli_fetch_array($result_image);
						$user_image = $row_image['user_img'];
						$user_user = $row_image['username'];
						$user_phone = $row_image['user_mobile'];
						$user_address = $row_image['user_address'];
						echo "
							<img src='../admin/product_image/$user_image' alt='avatar' class='rounded-circle img-fluid' style='width: 150px;'>
							<h5 class='my-3'>$user_user</h5>
							<p class='text-muted mb-1'>$useremail</p>
						<p class='text-muted mb-4'>$user_address</p>
							"
						?>

						<div class="d-flex justify-content-center mb-2">
							<a style="width: 200px" href="profile.php" class="btn btn-outline-primary ms-1">Pending Orders</a>
						</div>
						<div class="d-flex justify-content-center mb-2">
							<a style="width: 200px" href="profile.php?edit_account" class="btn btn-outline-primary ms-1">Edit Account</a>
						</div>
						<div class="d-flex justify-content-center mb-2">
							<a style="width: 200px" href="profile.php?my_orders" class="btn btn-outline-primary ms-1">My Orders</a>
						</div>
						<div class="d-flex justify-content-center mb-2">
							<a style="width: 200px" href="../logout.php" class="btn btn-outline-primary ms-1">Logout</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-8">
				<div class="card mb-4">
					<div class="card-body">

						<?php $useremail = $_SESSION['user_email'];
						$usereimage = "select * from `user_table` where user_email='$useremail'";
						$result_image = mysqli_query($con, $usereimage);
						$row_image = mysqli_fetch_array($result_image);
						$user_image = $row_image['user_img'];
						$user_user = $row_image['username'];
						$user_phone = $row_image['user_mobile'];
						$user_address = $row_image['user_address'];
						echo "
								<div class='row'>
							<div class='col-sm-3'>
								<p class='mb-0'>Full Name</p>
							</div>
							<div class='col-sm-9'>
								<p class='text-muted mb-0'>$user_user</p>
								</div>
								
								
					</div>
					<hr>
					<div class='row'>
						<div class='col-sm-3'>
							<p class='mb-0'>Email</p>
						</div>
						<div class='col-sm-9'>
							<p class='text-muted mb-0'>$useremail</p>
						</div>
					</div>
					<hr>
					<div class='row'>
						<div class='col-sm-3'>
							<p class='mb-0'>Phone</p>
						</div>
						<div class='col-sm-9'>
							<p class='text-muted mb-0'>$user_phone</p>
						</div>
					</div>
					<hr>
					<div class='row'>
						<div class='col-sm-3'>
							<p class='mb-0'>Address</p>
						</div>
						<div class='col-sm-9'>
							<p class='text-muted mb-0'>$user_address</p>
						</div>
					</div>
					"
						?>
					</div>
				</div>
				<div class="">
					<?php get_user_order_details() ?>
				</div>
				<div class="">
					<?php
					if (isset($_GET['my_orders'])) {
						include("./my_orders.php");
					}
					?>
				</div>
			</div>
		</div>
		</div>

	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>