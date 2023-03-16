<?php
include("../includes/connect.php");
if (isset($_POST['insert_brands'])) {
	$brand_title = $_POST['brand_title'];

	$select_query = "select * from `brands` where brand_title = '$brand_title'";
	$result_select = mysqli_query($con, $select_query);
	$number = mysqli_num_rows($result_select);
	if ($number > 0) {
		echo "<script>alert('Thương hiệu sản phẩm đã tồn tại, vui lòng thay đổi !!!')</script>";
	} else {
		$insert_query = "insert into `brands` (brand_title) values ('$brand_title')";
		$result = mysqli_query($con, $insert_query);
		if ($result) {
			echo "<script>alert('Thêm thương hiệu sản phẩm thành công !!!')</script>";
		}
	}
}
?>
<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
	<div class="input-group mb-2 w-90">
		<span class="input-group-text bg-info" id="basic-addon1">
			<i class="fa-solid fa-receipt"></i>
		</span>
		<input type="text" name="brand_title" class="form-control" placeholder="Insert Brands..." aria-label="Username" aria-describedby="basic-addon1">
	</div>

	<div class="input-group mb-2 w-10 m-auto">
		<input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brands" value="Insert Brands" class="bg-info" placeholder="Insert Brands..." aria-label="Username" aria-describedby="basic-addon1">
	</div>
</form>