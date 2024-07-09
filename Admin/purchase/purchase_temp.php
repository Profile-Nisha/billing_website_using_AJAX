
<form id="fupForm" name="form1" method="POST" action="purchase/purchase_entry.php">
	<div class="row">
	    <div class="text-center alert alert-success alert-dismissible" id="success" style="display:none;">
	      Added Successfully !!
	      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	    </div>		
		<div class="col-md-3 my-1">
			<label>Item Name</label>
			<select name="pro_id" id="pro_id" class="form-control  select2" onchange="showProDetails(this.value)" required="">
				<option value="">Select product</option>
				<?php
	          	$q1=mysqli_query($con,"SELECT * FROM `product` WHERE status=1 ORDER BY med_name ASC");
	          	while($r1=mysqli_fetch_array($q1)):
	          	?>
	            	<option value="<?= $r1['id'] ?>"><?= $r1['med_name'] ?></option>
	          	<?php
	          	endwhile;
	          	?>
			</select>
		</div>

		<div class="col-md-9 my-1" id="p_details">
			
		</div>

		<div class="col-md-3 my-1">
			<label>Batch</label>
			<input type="text" id="batch" name="batch" placeholder="Batch Number" class="form-control" required="">
		</div>

		<div class="col-md-3 my-1">
			<label>Exp Date</label>
			<input type="date" name="exp_date" class="form-control pull-right" id="" required="">
		</div>

		<div class="col-md-2 my-1">
			<label>Quantity</label>
			<input type="number" id="qty" name="qty" min="0" placeholder="Quantity" class="form-control" required="">
		</div>

		<div class="col-md-2 my-1">
			<label>Discount (%)</label>
			<input type="number" id="discount" name="discount" placeholder="Discount" class="form-control " >
		</div>

		<div class="col-md-1 my-1 mt-5">
			<input type="submit" name="save" class="btn btn-primary btn-sm btn-flat" value="Add" id="butsave">
		</div>
	</div>
</form>

<br><br>

<div class="">
	<table class="table table-sm table-bordered" id="example1">
		<thead style="background-color:#09953e; color:#fff;">
			<tr>
				<th>S.no</th>
				<th>Product</th>
				<th>Batch</th>
				<th>Expiry</th>
				<th>HSN</th>
				<th>QTY</th>
				<th>Price</th>
				<th>Amount</th>
				<th>Disc(%)</th>
				<th>Taxable</th>
				<th>GST</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=0;
			$result = mysqli_query($con,"SELECT * FROM `purchase_temp` ORDER BY id DESC ");
			while($r = mysqli_fetch_assoc($result)):
			?>
			<tr>
				<td><?= ++$i; ?></td>
				<td>
					<?php
					$p_id = $r['pro_id'];
					$q = mysqli_query($con,"SELECT * FROM `product` WHERE id='$p_id' ");
					$r1 = mysqli_fetch_assoc($q);
					echo $r1['med_name'];
					?>
				</td>
				<td><?= $r['batch'] ?></td>
				<td><?= $r['exp_date'] ?></td>
				<td><?= $r1['hsn_code'] ?></td>
				<td><?= $r['qty'] ?></td>
				<td><?= $r['purchase_price'] ?></td>
				<td class="text-right">
					<?php
					$price = $r['qty']*$r['purchase_price'];   //Amount
					echo number_format($price,2);
					?>
				</td>
				<td><?= $r['discount'] ?></td>
				<td class="text-right">
					<?php
					$taxable = $price - $price*$r['discount']/100 ;   // Taxable Amount
					echo number_format($taxable,2);
					?>
				</td>
				<td><?= $r['gst'] ?></td>
				<td class="text-right">
					<?php
					$total = $taxable + $taxable*$r['gst']/100 ;	// Total Amount
					echo number_format($total,2);
					?>
				</td>
				<td class="text-center">
					<a class="btn btn-sm btn-flat" href="./purchase/delete.php?id=<?= $r['id'] ?>"> <i class="fa fa-trash"></i> </a>
				</td>
			</tr>
			<?php endwhile; ?>

			<tr>
				<td>R</td>
				<th>Total</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th class="text-right">
					<?php
					$amt = mysqli_query($con,"SELECT SUM(amount) AS Amount FROM `purchase_temp`");
					$amt2 = mysqli_fetch_array($amt);
					$amt3 = $amt2['Amount'];
					echo $amt3;
					?>
				</th>
				<td></td>
				<th class="text-right">
					<?php
					$amt1 = mysqli_query($con,"SELECT SUM(taxable) AS TaxFree FROM `purchase_temp`");
					$amt21 = mysqli_fetch_array($amt1);
					$amt31 = $amt21['TaxFree'];
					echo $amt31;
					?>
				</th>
				<td></td>
				<th class="text-right">
					<?php
					$amt11 = mysqli_query($con,"SELECT SUM(total) AS GT FROM `purchase_temp`");
					$amt211 = mysqli_fetch_array($amt11);
					$amt311 = $amt211['GT'];
					echo $amt311;
					?>
				</th>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>	


<script>
	function showProDetails(str) {
    var xhttp;    
    if (str == "") {
      document.getElementById("pro_id").innerHTML = "";
      return;
    }
    // alert(str);
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("p_details").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "purchase/get_pro_details.php?q="+str, true);
    xhttp.send();
  }

</script>