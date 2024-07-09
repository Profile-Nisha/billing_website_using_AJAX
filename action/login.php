<?php
	include 'config.php';
	session_start();

	if(isset($_POST['save'])){
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$check=mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password'");
		$r=mysqli_fetch_array($check);
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['id']=$r['id'];
			$_SESSION['username']=$r['username'];
			$_SESSION['role']=$r['role'];
			// echo json_encode(array("statusCode"=>200));
			echo '<script>window.location.href="../software";</script>';
		}
		else{
			echo '<script>alert("Invalid Username or Password"); window.location.href="../";</script>';
			// echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($con);
	}
?>