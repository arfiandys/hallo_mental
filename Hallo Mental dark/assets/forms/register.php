<?php 

include 'config.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$telp = $_POST['telp'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM hallo_mental WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO hallo_mental (username, email, password, telp)
					VALUES ('$username', '$email', '$password', '$telp')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$telp = "";
				header('location:../index.html');
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
// echo '<meta http-equiv="refresh" content="0; url=http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']).'../../index.html">';
?>