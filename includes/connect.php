<?php
$con = mysqli_connect('localhost', 'root', '', 'mystoryphp');
if (!$con) {
	// die(mysqli_error($con));
	echo "connect failure!!!";
}
