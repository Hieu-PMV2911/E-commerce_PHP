<?php

// include "includes/connect.php";
function getProducts()
{
	global $con;
	if (!isset($_GET['category'])) {
		if (!isset($_GET['brand'])) {
			$select_query = "Select * from `products` order by rand() limit 0,9";
			$result_query = mysqli_query($con, $select_query);
			// $row=mysqli_fetch_assoc($result_query);
			// echo $row['product_title'];
			while ($row = mysqli_fetch_assoc($result_query)) {
				$product_id = $row['product_id'];
				$product_title = $row['product_title'];
				$product_description = $row['product_desc'];
				$product_image = $row['product_image'];
				$product_price = $row['product_price'];
				$category_id = $row['category_id'];
				$brand_id = $row['brand_id'];
				echo "
					<div class='col-md-4 mr-2 mb-2'>
						<div class='card'>
							<img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
							<div class='card-body'>
								<h5 class='card-title'>$product_title</h5>
								<p class='card-text'>$product_description</p>
								<p class='card-text text-danger'>Price: $product_price $</p>
								<a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add product</a>
								<a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View product</a>
							</div>
						</div>
					</div>";
			}
		}
	}
};

function getUniqueCate()
{
	global $con;
	if (isset($_GET['category'])) {
		$category_id = $_GET['category'];
		$select_query = "Select * from `products` where category_id = '$category_id'";
		$result_query = mysqli_query($con, $select_query);
		$num_of_rows = mysqli_num_rows($result_query);
		if ($num_of_rows == 0) {
			echo "<h2 class='mt-2 text-danger text-center'>No stock for this category</h2>";
		}
		// $row=mysqli_fetch_assoc($result_query);
		// echo $row['product_title'];
		while ($row = mysqli_fetch_assoc($result_query)) {
			$product_id = $row['product_id'];
			$product_title = $row['product_title'];
			$product_description = $row['product_desc'];
			$product_image = $row['product_image'];
			$product_price = $row['product_price'];
			$category_id = $row['category_id'];
			$brand_id = $row['brand_id'];
			echo "
					<div class='col-md-4 mr-2 mb-2'>
						<div class='card'>
							<img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
							<div class='card-body'>
								<h5 class='card-title'>$product_title</h5>
								<p class='card-text'>$product_description</p>
								<p class='card-text text-danger'>Price: $product_price $</p>
								<a href='index.php?add_to_card=$product_id' class='btn btn-info'>Add product</a>
								<a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View product</a>
							</div>
						</div>
					</div>";
		}
	}
};

function getUniqueBrand()
{
	global $con;
	if (isset($_GET['brand'])) {
		$brand_id = $_GET['brand'];
		$select_query = "Select * from `products` where brand_id = '$brand_id'";
		$result_query = mysqli_query($con, $select_query);
		$num_of_rows = mysqli_num_rows($result_query);
		if ($num_of_rows == 0) {
			echo "<h2 class='mt-2 text-danger text-center'>No stock for this brand</h2>";
		}
		// $row=mysqli_fetch_assoc($result_query);
		// echo $row['product_title'];
		while ($row = mysqli_fetch_assoc($result_query)) {
			$product_id = $row['product_id'];
			$product_title = $row['product_title'];
			$product_description = $row['product_desc'];
			$product_image = $row['product_image'];
			$product_price = $row['product_price'];
			$category_id = $row['category_id'];
			$brand_id = $row['brand_id'];
			echo "
					<div class='col-md-4 mr-2 mb-2'>
						<div class='card'>
							<img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
							<div class='card-body'>
								<h5 class='card-title'>$product_title</h5>
								<p class='card-text'>$product_description</p>
								<p class='card-text text-danger'>Price: $product_price $</p>
								<a href='index.php?add_to_card=$product_id' class='btn btn-info'>Add product</a>
								<a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View product</a>
							</div>
						</div>
					</div>";
		}
	}
};

function getBrands()
{
	global $con;
	$select_brands = "Select * from brands";
	$result_brands = mysqli_query($con, $select_brands);
	// $row_data = mysqli_fetch_assoc($result_brands);

	while ($row_data = mysqli_fetch_assoc($result_brands)) {
		$brand_title = $row_data['brand_title'];
		$brand_id = $row_data['brand_id'];
		echo
		"<li class='nav-item'>
			<a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
		</li>";
	}
}

function getCategory()
{
	global $con;
	$select_categories = "Select * from `categories`";
	$result_categories = mysqli_query($con, $select_categories);
	while ($row_data = mysqli_fetch_assoc($result_categories)) {
		$category_title = $row_data['category_title'];
		$category_id = $row_data['category_id'];
		echo "<li class='nav-item'>
						<a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
					</li>";
	}
}

// search products
function searchProducts()
{
	global $con;
	if (isset($_GET['search_data_product'])) {
		$search_data_value = $_GET['search_data'];
		$search_query = "Select * from `products` where product_keyword like '%$search_data_value%'";
		$result_query = mysqli_query($con, $search_query);
		$num_of_rows = mysqli_num_rows($result_query);
		if ($num_of_rows == 0) {
			echo "<h2 class='mt-2 text-danger text-center'>Không có sản phẩm</h2>";
		}
		while ($row = mysqli_fetch_assoc($result_query)) {
			$product_id = $row['product_id'];
			$product_title = $row['product_title'];
			$product_description = $row['product_desc'];
			$product_image = $row['product_image'];
			$product_price = $row['product_price'];
			$category_id = $row['category_id'];
			$brand_id = $row['brand_id'];
			echo "
					<div class='col-md-4 mr-2 mb-2'>
						<div class='card'>
							<img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
							<div class='card-body'>
								<h5 class='card-title'>$product_title</h5>
								<p class='card-text'>$product_description</p>
								<p class='card-text text-danger'>Price: $product_price $</p>
								<a href='index.php?add_to_card=$product_id' class='btn btn-info'>Add product</a>
								<a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View product</a>
							</div>
						</div>
					</div>";
		}
	}
}
function viewDetail()
{
	global $con;
	if (isset($_GET['product_id'])) {
		if (!isset($_GET['category'])) {
			if (!isset($_GET['brand'])) {
				$product_id = $_GET['product_id'];
				$select_query = "Select * from `products` where product_id=$product_id";
				$result_query = mysqli_query($con, $select_query);
				// $row=mysqli_fetch_assoc($result_query);
				// echo $row['product_title'];
				while ($row = mysqli_fetch_assoc($result_query)) {
					$product_id = $row['product_id'];
					$product_title = $row['product_title'];
					$product_description = $row['product_desc'];
					$product_image = $row['product_image'];
					$product_price = $row['product_price'];
					$category_id = $row['category_id'];
					$brand_id = $row['brand_id'];
					echo "
					<div class='col-md-4 mr-2 mb-2'>
						<div class='card'>
							<img src='./admin/product_image/$product_image' class='card-img-top' alt='...'>
							<div class='card-body'>
								<h5 class='card-title'>$product_title</h5>
								<p class='card-text'>$product_description</p>
								<p class='card-text text-danger'>Price: $product_price $</p>
								<a href='index.php?add_to_card=$product_id' class='btn btn-info'>Add product</a>
								<a href='index.php' class='btn btn-secondary'>Go Home</a>
							</div>
						</div>
					</div>
					
					<div class='col-md-8'>
					<div class='row'>
						<div class='col-md-12'>
							<h4 class='text-center text-info mb-5'>Related Products</h4>
						</div>
						<div class='col-md-6'>
							<img src='./admin/product_image/$product_image' alt='' class='card-img-top'>
						</div>
						<div class='col-md-6'>
							<img src='./admin/product_image/$product_image' alt='' class='card-img-top'>
						</div>
					</div>
				</div>";
				}
			}
		}
	}
};

// get ip address function
function getIPAddress()
{
	//whether ip is from the share internet  
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	//whether ip is from the proxy  
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	//whether ip is from the remote address  
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function cart()
{
	global $con;
	if (isset($_GET['add_to_cart'])) {
		$get_ip_add = getIPAddress();
		$get_product_id = $_GET['add_to_cart'];
		$select_query = "Select * from `cart_details` where ip_address='$get_ip_add' and
		product_id=$get_product_id";
		$result_query = mysqli_query($con, $select_query);
		$num_of_rows = mysqli_num_rows($result_query);
		if ($num_of_rows > 0) {
			echo "<script>alert('This item is already present inside cart')
		</script>";
			echo "<script>window.open('index.php', '_self') </script>";
		} else {
			$insert_query = "insert into `cart_details` (product_id, ip_address,
		quantity) values ($get_product_id, '$get_ip_add',0)";
			$result_query = mysqli_query($con, $insert_query);
			echo "<script>alert('Item is added to cart')</script>";
			echo "<script>window.open('index.php', '_self') </script>";
		}
	}
}

function cart_item()
{
	global $con;
	if (isset($_GET['add_to_cart'])) {
		$get_ip_add = getIPAddress();
		$select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
		$result_query = mysqli_query($con, $select_query);
		$num_of_rows = mysqli_num_rows($result_query);
	} else {
		$get_ip_add = getIPAddress();
		$select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
		$result_query = mysqli_query($con, $select_query);
		$num_of_rows = mysqli_num_rows($result_query);
	}
	echo $num_of_rows;
}

function total_cart_price()
{
	global $con;
	$get_ip_add = getIPAddress();
	$total = 0;
	$select_query = "Select * from `cart_details` where ip_address='$get_ip_add'";
	$result_query = mysqli_query($con, $select_query);
	while ($row = mysqli_fetch_array($result_query)) {
		$product_id = $row['product_id'];
		$select_products = "Select * from `products` where product_id='$product_id'";
		$result_products = mysqli_query($con, $select_products);
		while ($row_product_price = mysqli_fetch_array($result_products)) {
			$product_price = array($row_product_price['product_price']);
			$product_values = array_sum($product_price);
			$total += $product_values;
		}
	}
	echo $total;
}

// get user order
function get_user_order_details()
{
	global $con;
	$emailname = $_SESSION['user_email'];
	$get_details = "Select * from `user_table` where user_email = '$emailname'";
	$result_query_ad = mysqli_query($con, $get_details);
	while ($row_query_ad = mysqli_fetch_array($result_query_ad)) {
		$user_id = $row_query_ad['user_id'];
		if (!isset($_GET['edit_account'])) {
			if (!isset($_GET['my_orders'])) {
				$get_orders = "Select * from `user_orders` where user_id = $user_id and order_status = 'pending'";
				$result_orders_query = mysqli_query($con, $get_orders);
				$row_count = mysqli_num_rows($result_orders_query);
				if ($row_count > 0) {
					echo "<h3 class='text-center'>You have <span class='text-center; text-danger'>$row_count</span>
					product
					</h3>
					<div class='d-flex justify-content-center mb-2'>
							<a style='width: 200px' href='profile.php?my_orders' class='btn btn-outline-primary ms-1'>My Orders</a>
						</div>
					";
				} else {
					echo "<h3 class='text-center; text-danger'>You not have product</h3>
					<div class='d-flex justify-content-center mb-2'>
							<a style='width: 200px' href='../index.php' class='btn btn-outline-primary ms-1'>Home</a>
						</div>
					";
				}
			}
		}
	}
}
