<?php
include('../includes/connect.php');
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
	<div class="row" style="margin: 20px 0;">
		<h4 class='text-center'>ALL PRODUCTS</h4>
	</div>

	<div class="container">
		<form action="" method="post">
			<div class="row">
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>product_id</th>
							<th>product_title</th>
							<th>product_desc</th>
							<th>product_keyword</th>
							<th>category_id</th>
							<th>brand_id</th>
							<th>product_image</th>
							<th>product_price</th>
							<th>date</th>
							<th>status</th>
						</tr>
					</thead>
					<tbody style="align-items: center; text-align:center">
						<?php
						$get_order_details = "Select * from `products`";
						$result_orders = mysqli_query($con, $get_order_details);
						while ($row = mysqli_fetch_assoc($result_orders)) {
							$product_id = $row['product_id'];
							$product_title = $row['product_title'];
							$product_desc = $row['product_desc'];
							$product_keyword = $row['product_keyword'];
							$category_id = $row['category_id'];
							$brand_id = $row['brand_id'];
							$product_image = $row['product_image'];
							$product_price = $row['product_price'];
							$date = $row['date'];
							$status = $row['status'];
							echo "
						<tr>
							<td>$product_id</td>
							<td>$product_title</td>
							<td>$product_desc</td>
							<td>$product_keyword</td>
							<td>$category_id</td>
							<td>$brand_id</td>
							<td>$product_image</td>
							<td class='text-danger'>$product_price $</td>
							<td>$date</td>
							<td>$status</td>
						</tr>
						
						";
						}
						?>



					</tbody>
				</table>

		</form>

	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>