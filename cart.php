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
					<img src="./images/logo.jpg" style="width: 55px; height: 55px; border-radius:50%" alt="">
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
							<a class="nav-link" href="display_all.php">Products</a>
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
										<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 
										0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 
										3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
									</svg><?php cart_item() ?>
									<a class="dropdown-item" href="cart.php">Cart</a>
								</li>
								<li style="display: flex;">
									<svg style="align-items: center;justify-content: center;margin:auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
										<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
										<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 
										4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
									</svg>
									<a class="dropdown-item" href="#">Profile</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li style="display: flex;">
									<svg style="align-items: center;justify-content: center;margin:auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.
										5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 1
										4.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
										<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 
										0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
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
	</div>


	<div class="row" style="margin: 20px 0;">
		<h4 class='text-center'>CART</h4>
	</div>

	<div class="container">
		<form action="" method="post">
			<div class="row">
				<table class="table table-bordered text-center">

					<?php
					// global $con;
					$get_ip_add = getIPAddress();
					$total = 0;
					$select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
					$result_query = mysqli_query($con, $select_query);
					$result_count = mysqli_num_rows($result_query);
					if ($result_count > 0) {
						echo "
							<thead>
								<tr>
									<th>Product Title</th>
									<th>Product Image</th>
									<th>Quantity</th>
									<th>Total Price</th>
									<th>Remove</th>
									<th>Operations</th>
								</tr>
							</thead>
							<tbody style='align-items: center; text-align:center'>
							";
						while ($row = mysqli_fetch_array($result_query)) {
							$product_id = $row['product_id'];
							$select_products = "Select * from `products` where product_id='$product_id'";
							$result_products = mysqli_query($con, $select_products);
							while ($row_product_price = mysqli_fetch_array($result_products)) {
								$product_price = array($row_product_price['product_price']);
								$product_price_table = $row_product_price['product_price'];
								$product_title = $row_product_price['product_title'];
								$product_description = $row_product_price['product_desc'];
								$product_image = $row_product_price['product_image'];
								$product_values = array_sum($product_price);
								$total += $product_values;
					?>
								<tr>
									<td style="padding-top: 50px;"><?php echo $product_title  ?></td>
									<td><img style="width: 150px; height:100px; object-fit: contain;" src="./admin/product_image/<?php echo $product_image ?>" alt=""></td>
									<td style="padding-top: 50px;"><input type="number" min="0" name="qty"></td>
									<?php
									$get_ip_add = getIPAddress();
									if (isset($_POST['cart_update'])) {
										$quantity = $_POST['qty'];
										$update_cart_quantity = "update `cart_details` set quantity = $quantity where ip_address='$get_ip_add'";
										$result_products_quantity = mysqli_query($con, $update_cart_quantity);
										$total = (int)$total * (int)$quantity;
									}
									?>

									<td style="padding-top: 50px;" class="text-danger"><?php echo $product_price_table ?> $</td>
									<td style="padding-top: 50px;"><input type="checkbox" name="remove_item[]" value="<?php echo $product_id ?>"></td>
									<td style="padding-top: 30px;">
										<!-- <button class="bg-info рх-3 ру-2 border-0 mx-3 btn btn-outline-light" style="padding: 10px;border-radius: 10px;">
										Update
									</button> -->
										<input type="submit" class="bg-info рх-3 ру-2 border-0 mx-3 btn btn-outline-light" name="cart_update" style="padding: 10px;border-radius: 10px;" value="Update">
										<!-- <button class="bg-danger рх-3 ру-2 border-0 mx-3 btn btn-outline-light" style="padding: 10px;border-radius: 10px;">
										Remove
									</button> -->
										<input type="submit" class="bg-danger рх-3 ру-2 border-0 mx-3 btn btn-outline-light" name="cart_remove" style="padding: 10px;border-radius: 10px;" value="Remove">

									</td>
								</tr>

					<?php
							}
						}
					} else {
						echo "
							<h2 class='text-center; text-danger' style='align-items: center; text-align:center'>Cart is Empty !!!</h2>
							";
					}
					?>
					</tbody>
				</table>
				<div class="d-flex mb-5 text-center" style="align-items: flex-end;">
					<h4 class="px-3">Subtotal: <strong class="text-danger"><?php echo $total ?> $</strong></h4>
					<button class="bg-info рх-3 ру-2 border-0 mx-3 btn btn-outline-light" style="padding: 10px;border-radius: 10px;">
						<a href="index.php" class="bg-info btn-outline-light" style="text-decoration: none;">Continue Shopping</a></button>
					<button class="bg-secondary рx-3 ру-2 border-0 btn btn-outline-dark" style="padding: 10px;border-radius: 10px;">
						<a href="./user_area/checkout.php" class="bg-secondary btn-outline-dark" style="text-decoration: none;">
							Checkout
						</a>
					</button>
				</div>
		</form>
		<!-- delete item -->
		<?php
		function remove_items_cart()
		{
			global $con;
			if (isset($_POST['cart_remove'])) {
				foreach ($_POST['remove_item'] as $remove_items) {
					$delete_cart = "delete from `cart_details` where product_id='$remove_items'";
					$delete_products = mysqli_query($con, $delete_cart);
					if ($delete_products) {
						echo "<script>alert('Delete products successfully');</script>";
						echo "<script>window.open('cart.php','_self');</script>";
					}
				}
			}
		}
		echo $remove_item = remove_items_cart();
		?>
	</div>
	<!-- Footer -->
	<?php include("./includes/footer.php") ?>
	<!-- Footer -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>