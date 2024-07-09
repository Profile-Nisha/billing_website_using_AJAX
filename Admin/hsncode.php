
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gramin Arogya Seva Sanstha | HSN CODE</title>
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
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <?php include 'main_header.php'; ?>
  
  <?php include 'main_sidebar.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1> HSN CODE </h1>
      <ol class="breadcrumb">
        <li><a href="./"> Home</a></li>
        <li class="active">HSN CODE</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

    <div class="text-center alert alert-success alert-dismissible" id="success" style="display:none;">
      HSN CODE Added Successfully !!
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>

      <div>
        <form id="fupForm" >
          <div class="row">
            <div class="col-md-4">
              <input type="text" name="hsncode" id="hsncode" placeholder="Medicine Hsncode" class="form-control">
            </div>
            <div class="col-md-2">
              <!-- <input type="submit" name="save" id="save_btn" value="Save" class="btn btn-sm btn-primary btn-flat"> -->
              <input type="button" name="save" class="btn btn-primary btn-sm btn-flat" value="Save" id="butsave">
            </div>
          </div>
        </form>
      </div>

      <br>
      <div class="box box-primary" style="padding: 10px;">
        <table class="table table-striped table-sm" >
          <thead>
            <tr>
              <th>S.no</th>
              <th>HSN CODE</th>
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
    // Function to fetch data from the database and populate the table
    function fetchData() {
        $.ajax({
            url: 'fetch_data_hsncode.php', // PHP script to fetch data
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    var html = '';
                    $.each(response.hsncodes, function(index, item) {
                        html += '<tr>';
                        html += '<td>' + (index + 1) + '</td>';
                        html += '<td>' + item.hsncode + '</td>';
                        html += '<td>';
                        html += '<a href="#edit' + item.id + '" class="btn btn-primary btn-sm">Edit</a>';
                        html += '&nbsp;';
                        html += '<a href="#delete' + item.id + '" class="btn btn-danger btn-sm">Delete</a>';
                        html += '</td>';
                        html += '</tr>';
                    });
                    $('#table_body').html(html); // Replace existing table body with new data
                } else {
                    $('#table_body').html('<tr><td colspan="3">No data found</td></tr>'); // Handle case where no data is returned
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
                $('#table_body').html('<tr><td colspan="3">Error fetching data</td></tr>'); // Handle error case
            }
        });
    }

    // Call fetchData function initially
    fetchData();

    

   
});
</script>



<script>
$(document).ready(function() {
  $('#butsave').on('click', function() {
    $("#butsave").attr("disabled", "disabled");
    var hsncode = $('#hsncode').val();
    if(hsncode!=""){
      $.ajax({
        url: "insert_data.php",
        type: "POST",
        data: {
          type: 6,
          hsncode: hsncode        
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
            $("#butsave").removeAttr("disabled");
            $('#fupForm').find('input:text').val('');
            $("#success").show();
            window.location.href="";
          }
          else if(dataResult.statusCode==201){
             alert("Error occured !");
          }
        }
      });
    }
    else{
      alert('Please fill all the field !');
      $("#butsave").removeAttr("disabled");
    }
  });
});


</script>


</body>
</html>
