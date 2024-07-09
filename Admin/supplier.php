<?php include '../action/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gramin Arogya Seva Sanstha | Supplier</title>
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
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <?php include 'main_header.php'; ?>
  
  <?php include 'main_sidebar.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1> Supplier </h1>
      <ol class="breadcrumb">
        <li><a href="./"> Home</a></li>
        <li class="active">Supplier</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

    <div class="text-center alert alert-success alert-dismissible" id="success" style="display:none;">
      Supplier Added Successfully !!
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>

      <div>
        <form id="fupForm" >
          <div class="row">
            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="name" id="name" placeholder="Supplier Name*" class="form-control">
            </div>
            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="shopname" id="shopname" placeholder="Shop / Comany Name" class="form-control">
            </div>
            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="address" id="address" placeholder="Address*" class="form-control">
            </div>
            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="email" name="email" id="email" placeholder="Email" class="form-control">
            </div>
            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="mobile" id="mobile" placeholder="Mobile*" class="form-control">
            </div>
            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="gst" id="gst" placeholder="GST" class="form-control">
            </div>

            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="bank" id="bank" placeholder="Bank Name" class="form-control">
            </div>

            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="ac_name" id="ac_name" placeholder="Account Name" class="form-control">
            </div>

            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="ac_number" id="ac_number" placeholder="Account Number" class="form-control">
            </div>

            <div class="col-md-3" style="margin-bottom: 5px;">
              <input type="text" name="ifsc" id="ifsc" placeholder="IFS Code" class="form-control">
            </div>

            <div class="col-md-2" style="margin-bottom: 5px;">
              <input type="button" name="save" class="btn btn-primary btn-sm btn-flat" value="Save" id="butsave">
            </div>
          </div>
        </form>
      </div>

      <br>

      <div class="box box-primary table-responsive" style="padding: 10px;">
        <table class="table table-striped table-sm"  >
          <thead>
            <tr>
              <th>S.no</th>
              <th>Name</th>
              <th>Shop / Comany Name</th>
              <th>Address</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>GST</th>
              <th>Bank</th>
              <th>A/C Name</th>
              <th>A/C Number</th>
              <th>IFSC</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="table_body">
            
          </tbody>
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
    
    function fetchData() {
        $.ajax({
            url: 'fetch_data.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.length > 0) {
                    var html = '';
                    $.each(response, function(index, item) {
                        html += '<tr>';
                        html += '<td>' + (index + 1) + '</td>';
                        html += '<td>' + item.name + '</td>';
                        html += '<td>' + (item.shopname ? item.shopname : '') + '</td>';
                        html += '<td>' + item.address + '</td>';
                        html += '<td>' + (item.email ? item.email : '') + '</td>';
                        html += '<td>' + item.mobile + '</td>';
                        html += '<td>' + (item.gst ? item.gst : '') + '</td>';
                        html += '<td>' + (item.bank ? item.bank : '') + '</td>';
                        html += '<td>' + (item.ac_name ? item.ac_name : '') + '</td>';
                        html += '<td>' + (item.ac_number ? item.ac_number : '') + '</td>';
                        html += '<td>' + (item.ifsc ? item.ifsc : '') + '</td>';
                        html += '<td>';
                        html += '<a href="#edit' + item.id + '" class="btn btn-primary btn-sm">Edit</a>';
                        html += '&nbsp;';
                        html += '<a href="#delete' + item.id + '" class="btn btn-danger btn-sm">Delete</a>';
                        html += '</td>';
                        html += '</tr>';
                    });
                    $('#table_body').html(html); 
                } else {
                    $('#table_body').html('<tr><td colspan="12">No data found</td></tr>'); 
                }
            }
            // error: function(xhr, status, error) {
            //     console.error('Error fetching data:', error);
            //     $('#table_body').html('<tr><td colspan="12">Error fetching data</td></tr>');
            // }
        });
    }

    
    fetchData();

    
    setInterval(fetchData, 60000); 
});
</script>


<script>
$(document).ready(function() {
  $('#butsave').on('click', function() {
    $("#butsave").attr("disabled", "disabled");
    var name = $('#name').val();
    var shopname = $('#shopname').val();
    var address = $('#address').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var gst = $('#gst').val();

    var bank = $('#bank').val();
    var ac_name = $('#ac_name').val();
    var ac_number = $('#ac_number').val();
    var ifsc = $('#ifsc').val();



    if(name!="" && address!="" && mobile!=""){
      $.ajax({
        url: "insert_data.php",
        type: "POST",
        data: {
          type: 8,
          name: name, shopname: shopname, address: address, email: email, mobile: mobile, gst: gst, bank: bank, ac_name: ac_name, ac_number: ac_number, ifsc: ifsc
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
            $("#butsave").removeAttr("disabled");
            $('#fupForm').find('input:text').val('');
            $("#success").show();
            fetchData();
          }
          else if(dataResult.statusCode==201){
             alert("Error occured !");
          }
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
  });
});


</script>


</body>
</html>
