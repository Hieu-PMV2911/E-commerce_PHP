<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link href="./css/index.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="container-fluid" style="padding: 0">
		<!-- first -->
		<div class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container-fluid">
				<a class="navbar-brand" style="width: 200px; margin-left: 60px; text-align: center; color:white" href="#">
					<img src="data:image/jpeg;base64,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" style="width: 55px; height: 55px; border-radius:50%" alt="">
					Abaha
				</a>
				<nav class="navbar navbar-expand-lg">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="" class="nav-link">Welcome Admin</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- second -->
		<div class="bg-light">
			<h3 class="text-center p-2">
				Manage Detals
			</h3>
		</div>
		<!-- third -->
		<div class="row">
			<div class="col-md-12 bg-secondary p-1">
				<div class="">
					<a href="" style="display: flex; align-items: center; justify-content:center; margin: 20px;  text-decoration: none; list-style:none; text-align: center">
						<img style="width: 60px; height: 60px; border-radius: 50%" src="https://th.bing.com/th/id/OIP.KW8WUwEuVpHgCw5jZ2rTJgHaHa?w=208&h=207&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" class="admin_image">
						<p class="text-light text-center" style="margin-left: 20px; font-size: 20px;">Admin name</p>
					</a>
				</div>
				<div class="button text-center">
					<button><a href="insert_product.php" class="nav-link text-alight bg-info my-1">Insert Products</a></button>
					<button><a href="index.php?view_all_product" class="nav-link text-alight bg-info my-1">View Products</a></button>
					<button><a href="index.php?insert_category" class="nav-link text-alight bg-info my-1">Insert Categorys</a></button>
					<button><a href="index.php?view_category" class="nav-link text-alight bg-info my-1">View Categorys</a></button>
					<button><a href="index.php?insert_brands" class="nav-link text-alight bg-info my-1">Insert Brands</a></button>
					<button><a href="index.php?view_brands" class="nav-link text-alight bg-info my-1">View Brands</a></button>
					<button><a href="index.php?all_order_product" class="nav-link text-alight bg-info my-1">All orders</a></button>
					<button><a href="index.php?list_user" class="nav-link text-alight bg-info my-1">List User</a></button>
					<button><a href="" class="nav-link text-alight bg-info my-1">Logout</a></button>
				</div>
			</div>
		</div>

		<div class="container my-5">
			<?php
			if (isset($_GET['view_all_product'])) {
				include('view_all_product.php');
			}
			if (isset($_GET['all_order_product'])) {
				include('all_order_product.php');
			}
			if (isset($_GET['list_user'])) {
				include('list_user.php');
			}
			if (isset($_GET['view_brands'])) {
				include('view_brands.php');
			}
			if (isset($_GET['view_category'])) {
				include('view_category.php');
			}
			if (isset($_GET['insert_category'])) {
				include('insert_cate.php');
			}
			if (isset($_GET['insert_brands'])) {
				include('insert_brands.php');
			}
			?>
		</div>
	</div>


	<!-- footer -->
	<footer class="bg-dark text-center text-white footer">
		<!-- Grid container -->
		<div class="container p-4">
			<!-- Section: Social media -->
			<section class="mb-4">
				<!-- Facebook -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

				<!-- Twitter -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

				<!-- Google -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

				<!-- Instagram -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

				<!-- Linkedin -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

				<!-- Github -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
			</section>
			<!-- Section: Social media -->

			<!-- Section: Form -->
			<section class="">
				<form action="">
					<!--Grid row-->
					<div class="row d-flex justify-content-center">
						<!--Grid column-->
						<div class="col-auto">
							<p class="pt-2">
								<strong>Sign up for our newsletter</strong>
							</p>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-5 col-12">
							<!-- Email input -->
							<div class="form-outline form-white mb-4">
								<input type="email" id="form5Example21" class="form-control" />
								<label class="form-label" for="form5Example21">Email address</label>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-auto">
							<!-- Submit button -->
							<button type="submit" class="btn btn-outline-light mb-4">
								Subscribe
							</button>
						</div>
						<!--Grid column-->
					</div>
					<!--Grid row-->
				</form>
			</section>
			<!-- Section: Form -->

			<!-- Section: Text -->
			<section class="mb-4">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
					repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
					eum harum corrupti dicta, aliquam sequi voluptate quas.
				</p>
			</section>
			<!-- Section: Text -->

			<!-- Section: Links -->
			<section class="">
				<!--Grid row-->
				<div class="row">
					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Links</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" class="text-white">Link 1</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 2</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 3</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 4</a>
							</li>
						</ul>
					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Links</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" class="text-white">Link 1</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 2</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 3</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 4</a>
							</li>
						</ul>
					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Links</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" class="text-white">Link 1</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 2</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 3</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 4</a>
							</li>
						</ul>
					</div>
					<!--Grid column-->

					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Links</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" class="text-white">Link 1</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 2</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 3</a>
							</li>
							<li>
								<a href="#!" class="text-white">Link 4</a>
							</li>
						</ul>
					</div>
					<!--Grid column-->
				</div>
				<!--Grid row-->
			</section>
			<!-- Section: Links -->
		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2023
			<a class="text-white" href="https://mdbootstrap.com/">Team666.com</a>
		</div>
		<!-- Copyright -->
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>