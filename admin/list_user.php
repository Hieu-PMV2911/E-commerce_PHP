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
		<h4 class='text-center'>ALL USERS</h4>
	</div>

	<div class="container">
		<form action="" method="post">
			<div class="row">
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>user_id </th>
							<th>username </th>
							<th>user_email </th>
							<th>user_password </th>
							<th>user_img </th>
							<th>user_ip </th>
							<th>user_address </th>
							<th>user_mobile </th>
						</tr>
					</thead>
					<tbody style="align-items: center; text-align:center">
						<?php
						$get_order_details = "Select * from `user_table`";
						$result_orders = mysqli_query($con, $get_order_details);
						while ($row = mysqli_fetch_assoc($result_orders)) {
							$user_id  = $row['user_id'];
							$username = $row['username'];
							$user_email = $row['user_email'];
							$user_password = $row['user_password'];
							$user_img = $row['user_img'];
							$user_ip = $row['user_ip'];
							$user_address = $row['user_address'];
							$user_mobile = $row['user_mobile'];
							echo "
						<tr>
							<td>$user_id</td>
							<td>$username</td>
							<td>$user_email</td>
							<td>$user_password</td>
							<td>$user_img</td>
							<td>$user_ip</td>
							<td>$user_address</td>
							<td>$user_mobile</td>
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