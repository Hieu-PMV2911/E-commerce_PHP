<?php
include('../includes/connect.php');
if (isset($_POST['insert_product'])) {
	$product_title = $_POST['product_title'];
	$description = $_POST['product_decs'];
	$product_keywords = $_POST['product_keywords'];
	$product_category = $_POST['product_categories'];
	$product_brands = $_POST['product_brands'];
	$product_price = $_POST['product_price'];
	$product_status = 'true';
	// image
	$product_image = $_FILES['product_image']['name'];
	//tpm name
	$temp_image = $_FILES['product_image']['tmp_name'];
	// check empty
	// checking empty condition
	if (
		$product_title == '' or $description == '' or $product_keywords == '' or $product_category == ''
		or $product_brands == '' or $product_price == '' or $product_image == ''
	) {
		echo "<script>alert('Please fill all the available fields') </script>";
		exit();
	} else {
		move_uploaded_file($temp_image, "./product_image/$product_image");
		// insert query
		$insert_products = "insert into products (product_title, product_desc,
		product_keyword, category_id, brand_id, product_image,
		product_price, date, status) values ('$product_title', '$description', '$product_keywords',
		'$product_category', '$product_brands', '$product_image', '$product_price', NOW(), '$product_status')";
		$result_query = mysqli_query($con, $insert_products);
		if ($result_query) {
			echo "<script>alert('Thêm sản phẩm thành công !!!')</script>";
		}
	}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Product - Admin</title>
	<link href="./css/index.css" rel="stylesheet" />
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

									<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Insert product</p>

									<form class="mx-1 mx-md-4" action="" method="post" enctype="multipart/form-data">
										<!-- title -->
										<div class="d-flex flex-row align-items-center mb-4">
											<!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="product_title">Product Title</label>
												<input type="text" id="product_title" name="product_title" class="form-control" require="require" autocomplete="off" />
											</div>
										</div>
										<!-- description -->
										<div class="d-flex flex-row align-items-center mb-4">
											<!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="product_decs">Product Description</label>
												<input type="text" id="product_decs" name="product_decs" class="form-control" require="require" autocomplete="off" />
											</div>
										</div>

										<!-- keywords -->
										<div class="d-flex flex-row align-items-center mb-4">
											<!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="product_keywords">Product Keywords</label>
												<input type="text" id="product_keywords" name="product_keywords" class="form-control" require="require" autocomplete="off" />
											</div>
										</div>

										<!-- categories -->
										<div class="d-flex flex-row align-items-center mb-4">
											<!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="product_categories">Choose Category</label>
												<select class="form-control form-select" name="product_categories" id="product_categories">
													<option value="">Select a Category</option>
													<?php
													$select_categories = "Select * from `categories`";
													$result_categories = mysqli_query($con, $select_categories);
													while ($row_data = mysqli_fetch_assoc($result_categories)) {
														$category_title = $row_data['category_title'];
														$category_id = $row_data['category_id'];
														echo "<option value='$category_id'>$category_title</option>";
													}
													?>
												</select>
											</div>
										</div>
										<!-- brands -->
										<div class="d-flex flex-row align-items-center mb-4">
											<!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="product_brands">Choose Brands</label>
												<select class="form-control form-select" name="product_brands" id="product_brands">
													<option value="">Select a Brands</option>
													<?php
													$select_brands = "Select * from brands";
													$result_brands = mysqli_query($con, $select_brands);
													while ($row_data = mysqli_fetch_assoc($result_brands)) {
														$brand_title = $row_data['brand_title'];
														$brand_id = $row_data['brand_id'];
														echo "<option value='$brand_id'>$brand_title</option>";
													}
													?>
												</select>
											</div>
										</div>
										<!-- image -->
										<div class="d-flex flex-row align-items-center mb-4">
											<!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="product_image">Product Image</label>
												<input type="file" id="product_image" name="product_image" class="form-control" require="require" autocomplete="off" />
											</div>
										</div>

										<!-- price -->
										<div class="d-flex flex-row align-items-center mb-4">
											<!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="product_price">Product Price</label>
												<input type="text" id="product_price" name="product_price" class="form-control" require="require" autocomplete="off" />
											</div>
										</div>

										<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
											<input type="submit" class="btn btn-primary btn-lg w-100" name="insert_product" value="Submit" class="bg-info" placeholder="Submit" aria-label="Username" aria-describedby="basic-addon1">

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

</body>

</html>