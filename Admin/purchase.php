<?php include '../action/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gramin Arogya Seva Sanstha | Customer</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <?php include 'main_header.php'; ?>
  
  <?php include 'main_sidebar.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1> Customer </h1>
      <ol class="breadcrumb">
        <li><a href="./"> Home</a></li>
        <li class="active">Stock-in</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

    <div class="text-center alert alert-success alert-dismissible" id="success" style="display:none;">
      Stock-in Added Successfully !!
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>

      <div>
      <form id="fupForm" >
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
	          	$q1=mysqli_query($con,"SELECT * FROM `product` ");
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
			<input type="date" name="exp_date" class="form-control pull-right" id="exp_date" required="">
		</div>

		<div class="col-md-2 my-1">
			<label>Quantity</label>
			<input type="number" id="qty" name="qty" min="0" placeholder="Quantity" class="form-control" required="">
		</div>

		<div class="col-md-2 my-1">
			<label>Discount (%)</label>
			<input type="number" id="discount" name="discount" placeholder="Discount" class="form-control " >
		</div>

		<div class="col-md-1 my-1 mt-5"><br>
			<input type="submit" name="save" class="btn btn-primary btn-sm btn-flat" value="Add" id="butsave">
		</div>
	</div>
</form>

<br><br>
      </div>

      <br>
      <div class="">
	<table class="table table-sm table-bordered" >
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
		
	</table>
</div>	


    </section>
  </div>
  <?php include 'main_footer.php'; ?>
</div>
<!-- ./wrapper -->
<?php include 'footer_links.php'; ?>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>


<script>
$(document).ready(function() {
    $('#butsave').on('click', function() {
        var pro_id = $('#pro_id').val();
        var batch = $('#batch').val();
        var exp_date = $('#exp_date').val();
        var qty = $('#qty').val();
        var discount = $('#discount').val();
        
        $.ajax({
            url: 'purchase_entry.php',
            type: 'POST',
            data: {
                pro_id: pro_id,
                batch: batch,
                exp_date: exp_date,
                qty: qty,
                discount: discount,
                save: 1
            },
            success: function(response) {
                $('#success').show();
                $('#fupForm')[0].reset();
                // You can optionally update the UI or do other tasks here after a successful insert
            }
        });
    });
});
</script>




</body>
</html>
