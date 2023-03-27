<?php
include('./includes/connect.php');
include('./functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website thương mại</title>
	<link href="./css/index.css" rel="stylesheet" />
	<link href="./css/home.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<!-- navbar -->
	<div class=" container-fluid p-0">
		<!-- first child -->
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container-fluid">
				<a class="navbar-brand" style="width: 200px; margin-left: 60px; text-align: center; color:white" href="index.php">
					<img src="data:image/jpeg;base64,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" style="width: 55px; height: 55px; border-radius:50%" alt="">
					Abaha
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" style="text-align: center; margin-left: 20rem" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item" style="width: 100px">
							<a class="nav-link" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item" style="width: 100px">
							<a class="nav-link active" href="display_all.php">Products</a>
						</li>
						<li class="nav-item" style="width: 100px">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item" style="width: 100px">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item dropdown" style="width: 100px">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Menu
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li style="display: flex;">
									<svg style="align-items: center;justify-content: center;margin:auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
										<path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
										<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
									</svg><?php cart_item() ?>
									<a class="dropdown-item" href="cart.php">Cart</a>
								</li>
								<li style="display: flex;">
									<svg style="align-items: center;justify-content: center;margin:auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
										<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
										<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
									</svg>
									<a class="dropdown-item" href="#">Profile</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li style="display: flex;">
									<svg style="align-items: center;justify-content: center;margin:auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
										<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
									</svg>
									<?php
									if (!isset($_SESSION['user_email'])) {
										echo "
										<a class='dropdown-item' href='./user_area/user_login.php'>
											Login
										</a>
										";
									} else {
										echo "
										<a class='dropdown-item' href='logout.php'>Logout (" . 	$_SESSION['user_email'] . ")</a>";
									}

									?>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<?php
		cart();
		?>
		<form class="d-flex me-auto" style="width: 40%; margin: auto; margin-top:15px" action="search_product.php" method="get">
			<input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" name="search_data">
			<input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
		</form>
	</div>


	<div class="row" style="margin: 20px 0;">
		<h4 class='text-center'>Product</h4>
		<!-- sidenav -->
		<div class="col-md-2 bg-secondary mb-2" style="padding: 0">
			<!-- brands -->
			<ul class="navbar-nav me-auto text-center">
				<li class="nav-item bg-info mb-1">
					<a href="#" class="nav-link text-light">
						<h4>Delivery Brands</h4>
					</a>
				</li>
				<?php
				getBrands();
				?>
			</ul>

			<!-- categorys -->
			<ul class="navbar-nav me-auto text-center">
				<li class="nav-item bg-info mb-1">
					<a href="#" class="nav-link text-light">
						<h4>Category</h4>
					</a>
				</li>
				<?php
				getCategory();

				?>
			</ul>
		</div>

		<!-- products -->
		<div class="col-md-10">
			<div class="row">
				<?php
				getProducts();
				// getIPAddress();
				getUniqueCate();
				getUniqueBrand();
				$ip = getIPAddress();
				?>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include("./includes/footer.php") ?>
	<!-- Footer -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>