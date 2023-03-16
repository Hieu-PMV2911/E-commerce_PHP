<?php
include("../includes/connect.php");
if (isset($_POST['insert_cat'])) {
	$category_title = $_POST['cat_title'];

	$select_query = "select * from `categories` where category_title = '$category_title'";
	$result_select = mysqli_query($con, $select_query);
	$number = mysqli_num_rows($result_select);
	if ($number > 0) {
		echo "<script>alert('Thể loại sản phẩm đã tồn tại, vui lòng thay đổi !!!')</script>";
	} else {
		$insert_query = "insert into `categories` (category_title) values ('$category_title')";
		$result = mysqli_query($con, $insert_query);
		if ($result) {
			echo "<script>alert('Thêm thể loại sản phẩm thành công !!!')</script>";
		}
	}
}
?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
	<div class="input-group mb-2 w-90">
		<span class="input-group-text bg-info" id="basic-addon1">
			<i class="fa-solid fa-receipt"></i>
		</span>
		<input type="text" name="cat_title" class="form-control" placeholder="Insert Category..." aria-label="Username" aria-describedby="basic-addon1">
	</div>

	<div class="input-group mb-2 w-10 m-auto">
		<input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Category" class="bg-info" placeholder=" Insert Category..." aria-label="Username" aria-describedby="basic-addon1">
		<!-- <button class="bg-info p-2 my-3 border-0">Insert Category</button> -->
	</div>
</form>