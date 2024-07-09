<?php
session_start();
include 'config.php';

if($_SESSION['username']=='' && $_SESSION['role']==''){
	echo ' <script> alert("access denied");
			window.location.href="../action/logout.php";
	 </script> ';
}


?>