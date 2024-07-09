<?php
include '../action/config.php';


if($_POST['type']==1){
	$category=$_POST['category'];
	$sql = "INSERT INTO `category`(`category`)
	VALUES ('$category')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}

elseif($_POST['type']==2){
	$mtype=$_POST['mtype'];
	$sql = "INSERT INTO `type`(`mtype`)
	VALUES ('$mtype')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}

elseif($_POST['type']==3){
	$unit=$_POST['unit'];
	$sql = "INSERT INTO `unit`(`unit`)
	VALUES ('$unit')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}

elseif($_POST['type']==4){
	$manufacturer=$_POST['manufacturer'];
	$sql = "INSERT INTO `manufacturer`(`manufacturer`)
	VALUES ('$manufacturer')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}


elseif($_POST['type']==5){
	$generics=$_POST['generics'];
	$sql = "INSERT INTO `generics`(`generics`)
	VALUES ('$generics')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}

elseif($_POST['type']==6){
	$hsncode=$_POST['hsncode'];
	$sql = "INSERT INTO `hsncode`(`hsncode`)
	VALUES ('$hsncode')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}

elseif($_POST['type']==7){
	$med_name=$_POST['med_name'];

 $gen_name=$_POST['gen_name'];

	$pack=$_POST['pack'];
	$qty=$_POST['qty'];
	$med_category=$_POST['med_category'];
	$med_type=$_POST['med_type'];
	$med_unit=$_POST['med_unit'];
	$med_menufact=$_POST['med_menufact'];
	$hsn_code=$_POST['hsn_code'];
	$barcode=$_POST['barcode'];
	$mrp=$_POST['mrp'];
	$purchase=$_POST['purchase'];
	$sale_a=$_POST['sale_a'];
	$sale_b=$_POST['sale_b'];
	$sgst=$_POST['sgst'];
	$cgst=$_POST['sgst'];
	$igst=$_POST['sgst']*2;
	// date_default_timezone_set('Asia/Kolkata');
	// $timestamp = date("d-m-Y H:i:s");


	$sql = "INSERT INTO `product`(`med_name`, `gen_name`, `pack`, `qty`, `med_category`, `med_type`, `med_unit`, `med_menufact`, `hsn_code`, `barcode`, `mrp`, `purchase`, `sale_a`, `sale_b`, `sgst`, `cgst`, `igst`) VALUES ('$med_name','$gen_name','$pack','$qty','$med_category','$med_type','$med_unit','$med_menufact','$hsn_code','$barcode','$mrp','$purchase','$sale_a','$sale_b','$sgst','$cgst','$igst')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}


elseif($_POST['type']==8){
	$name=$_POST['name'];
	$shopname=$_POST['shopname'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$gst=$_POST['gst'];
	$bank=$_POST['bank'];
	$ac_name=$_POST['ac_name'];
	$ac_number=$_POST['ac_number'];
	$ifsc=$_POST['ifsc'];


	$sql = "INSERT INTO `supplier`(`name`, `shopname`, `address`, `email`, `mobile`, `gst`, `bank`, `ac_name`, `ac_number`, `ifsc`)
	VALUES ('$name', '$shopname', '$address', '$email', '$mobile', '$gst', '$bank', '$ac_name', '$ac_number', '$ifsc')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}

elseif($_POST['type']==9){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$gst=$_POST['gst'];
	$sql = "INSERT INTO `customer`(`name`, `address`, `email`, `mobile`, `gst`)
	VALUES ('$name', '$address', '$email', '$mobile', '$gst')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
}

?>
