
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gramin Arogya Seva Sanstha | Dashboard</title>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">

    <?php include 'main_header.php'; ?>

    <?php include 'main_sidebar.php'; ?>

    <div class="content-wrapper">
      <section class="content-header">
        <h1> Dashboard </h1>
        <ol class="breadcrumb">
          <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>


      <!-- Main content -->
      <section class="content">
        <!-- <div class="row">
          <div class="col-lg-3 col-xs-6">
           
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              
              <a href="./customer.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
             
              <a href="purchase-invoice-report.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
           
          </div>
        </div> -->

        <br>

        <h5 align="center" style="border: 2px solid black; font-size: 14px;"><b>List of Medicine Expiring Within 30 Days</b></h5>

        <div class="table-responsive">
          <table class="table table-striped table-sm" id="example1">
            <thead>
              <tr>
                <th>Product</th>
                <th>Generic Name</th>
                <th>Packing</th>
                <th>Unit</th>
                <th>Purchase Price</th>
                <th>Batch</th>
                <th>Qty</th>
                <th>Exp Date</th>
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
  <script>
    $(function() {
      $('#example1').DataTable()
    })
  </script>
</body>

</html>