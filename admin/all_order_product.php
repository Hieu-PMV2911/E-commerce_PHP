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
		<h4 class='text-center'>ALL ORDERS</h4>
	</div>

	<div class="container">
		<form action="" method="post">
			<div class="row">
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>order_id </th>
							<th>user_id </th>
							<th>invoice_number </th>
							<th>product_id </th>
							<th>quantity </th>
							<th>order_status </th>
						</tr>
					</thead>
					<tbody style="align-items: center; text-align:center">
						<?php
						$get_order_details = "Select * from `oders_pending`";
						$result_orders = mysqli_query($con, $get_order_details);
						while ($row = mysqli_fetch_assoc($result_orders)) {
							$order_id = $row['order_id'];
							$user_id = $row['user_id'];
							$invoice_number = $row['invoice_number'];
							$product_id = $row['product_id'];
							$quantity = $row['quantity'];
							$order_status = $row['order_status'];
							echo "
						<tr>
							<td>$order_id</td>
							<td>$user_id</td>
							<td>$invoice_number</td>
							<td>$product_id</td>
							<td>$quantity</td>
							<td>$order_status</td>
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