<?php
include "../../action/login.php";

$id = $_GET['q'];

$query=mysqli_query($con,"SELECT * FROM `product` WHERE id='$id'");
$r=mysqli_fetch_array($query);

?>

<div class="row">
	<div class="col-md-2">
		<label>Barcode</label>
		<input type="text" id="barcode" name="barcode" value="<?= $r['barcode'] ?>" placeholder="Barcode" class="form-control" >
	</div>

	<div class="col-md-2">
		<label>Packing</label>
		<input type="text" id="packing" name="packing" value="<?= $r['pack'].' x '.$r['qty'] ?>" placeholder="Barcode" class="form-control" readonly>
	</div>

	<div class="col-md-2">
		<label>Unit</label>
		<input type="text" id="unit" name="unit" value="<?= $r['med_unit'] ?>" class="form-control" readonly>
	</div>

	<div class="col-md-2">
		<label>Purchase Price</label>
		<input type="text" id="purchase" name="purchase" value="<?= $r['purchase'] ?>" placeholder="Purchase Price" class="form-control">
	</div>

	<div class="col-md-2">
		<label>GST</label>
		<input type="text" id="gst" name="gst" value="<?= $r['igst'].'%' ?>" placeholder="GST" class="form-control" readonly>
	</div>

</div>
