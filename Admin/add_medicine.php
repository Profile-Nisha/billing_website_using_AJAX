<?php

include '../action/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gramin Arogya Seva Sanstha | Add Medicine</title>
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
  <!-- Select2 -->
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->


</head>
<body class="sidebar-mini wysihtml5-supported skin-red">
  <div class="wrapper">
    
    <?php include 'main_header.php'; ?>
    <?php include 'main_sidebar.php'; ?>

    <div class="content-wrapper">
      <section class="content-header">
        <h1>Add Medicine</h1>
        <ol class="breadcrumb">
          <li><a href="./">Home</a></li><li class="active">Medicine</li>
        </ol>
      </section>

      <section class="content">
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="box box-info addtile">
              <div class="box-header with-border">
                <h3 class="box-title" id="add-itile">Import Medicine From Excel</h3>
              </div>
              <form action="https://medical.tripledotss.com/medicine/importData" class="form-horizontal" id="noaction" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="box-body">
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="Choose file" class="col-sm-4 control-label">Choose file</label>
                      <div class="col-sm-8">
                        <input type="file" name="uploadFile" id="uploadFile" class="form-control" required accept=".xls, .xlsx" />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="" class="col-sm-4 control-label"></label>
                      <div class="col-sm-8">
                        <input type="submit" name="submit" value="Import" id="submit" class="btn btn-info pull-left"  />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Download Excel Format" class="col-sm-12 control-label"><a class="text-danger" href="https://medical.tripledotss.com/assets/excel_data_format.xlsx" download>Download Excel Format</a></label>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="box box-info hidden viewtile">
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-12">
            <div class="text-center alert alert-success alert-dismissible" id="success" style="display:none;">
              Medicine Added Successfully !!
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
            <div class="box box-info addtile">
              <div class="box-header with-border">
                <h3 class="box-title" id="add-tile">Add Medicine</h3>
              </div>
              
              <form class="form-horizontal" id="fupForm" >
                <div class="box-body">
                  <div class="row">
                    
                    <div class="form-group col-md-4">
                      <label for="Medicine Name" class="col-sm-4 control-label">Medicine Name</label>
                      <div class="col-sm-8">
                        <input type="text" name="med_name" value="" id="med_name" placeholder="Medicine Name" class="form-control" autocomplete="off"  />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Generic Name" class="col-sm-4 control-label">Generic Name</label>
                      <div class="col-sm-8">
                        <select name="gen_name" id="gen_name" class="form-control " >
                          <option value="">--Select--</option>
                          <?php
                          $q0=mysqli_query($con,"SELECT * FROM `generics` ");
                          while($r0=mysqli_fetch_array($q0)):
                          ?>  
                            <option value="<?= $r0['generics'] ?>"><?= $r0['generics'] ?></option>
                          <?php
                          endwhile;
                          ?>
                        </select>
                        <!-- <a href="javascript:void(0);" style="color: green;cursor:pointer" data-target="#add_generic_modal" data-toggle="modal"><i class="fa fa-plus"></i> Add Medicine Generic</a> -->
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Medicine Name" class="col-sm-3 control-label">Packing</label>
                      <div class="col-sm-4" style="padding: 0px;">
                        <input type="number" name="pack" min="1" id="pack" placeholder="Pack" class="form-control"  />
                      </div>
                      <span class="col-sm-1" style="font-size:24px; color:#000; font-weight:bold; padding-left: 5px;">×</span>
                      <div class="col-sm-4" style="padding: 0px; margin: 0px;">
                        <input type="number" name="qty" min="1" id="qty" placeholder="Qty" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4" id="category_info">
                      <label for="Medicine Category" class="col-sm-4 control-label">Medicine Category</label>
                      <div class="col-sm-8">
                        <select name="med_category" id="med_category" class="form-control">
                          <option value="">--Select--</option>
                          <?php
                          $q1=mysqli_query($con,"SELECT * FROM `category` ");
                          while($r1=mysqli_fetch_array($q1)):
                          ?>
                            <option value="<?= $r1['category'] ?>"><?= $r1['category'] ?></option>
                          <?php
                          endwhile;
                          ?>
                        </select>
                        <!-- <a href="javascript:void(0);" style="color: green;cursor:pointer" data-target="#add_category_modal" data-toggle="modal"><i class="fa fa-plus"></i> Add Medicine Category</a> -->
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Medicine Type" class="col-sm-4 control-label">Medicine Type</label>
                      <div class="col-sm-8">
                        <select name="med_type" id="med_type" class="form-control">
                          <option value="">--Select--</option>
                          <?php
                          $q2=mysqli_query($con,"SELECT * FROM `type` ");
                          while($r2=mysqli_fetch_array($q2)):
                          ?>
                            <option value="<?= $r2['mtype'] ?>"><?= $r2['mtype'] ?></option>
                          <?php
                          endwhile;
                          ?>
                        </select>
                        <!-- <a href="javascript:void(0);" style="color: green;cursor:pointer" data-target="#add_type_modal" data-toggle="modal"><i class="fa fa-plus"></i> Add Medicine Type</a> -->
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Medicine Unit" class="col-sm-4 control-label">Medicine Unit</label>
                      <div class="col-sm-8">
                        <select name="med_unit" id="med_unit" class="form-control">
                          <option value="">--Select--</option>
                          <?php
                          $q1=mysqli_query($con,"SELECT * FROM `unit` ");
                          while($r1=mysqli_fetch_array($q1)):
                          ?>
                            <option value="<?= $r1['unit'] ?>"><?= $r1['unit'] ?></option>
                          <?php
                          endwhile;
                          ?>
                        </select>
                        <!-- <a href="javascript:void(0);" style="color: green;cursor:pointer" data-target="#add_unit_modal" data-toggle="modal"><i class="fa fa-plus"></i> Add Medicine Unit</a> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="Medicine Manufacturer" class="col-sm-4 control-label"> Manufacturer</label>
                      <div class="col-sm-8">
                        <select name="med_menufact" id="med_menufact" class="form-control">
                          <option value="">--Select--</option>
                          <?php
                          $q4=mysqli_query($con,"SELECT * FROM `manufacturer` ");
                          while($r4=mysqli_fetch_array($q4)):
                          ?>
                            <option value="<?= $r4['manufacturer'] ?>"><?= $r4['manufacturer'] ?></option>
                          <?php
                          endwhile;
                          ?>
                        </select>
                        <!-- <a href="javascript:void(0);" style="color: green;cursor:pointer" data-target="#add_menufact_modal" data-toggle="modal"><i class="fa fa-plus"></i> Add Medicine Manufacturer</a> -->
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="HSN Code" class="col-sm-4 control-label">HSN Code</label>
                      <div class="col-sm-8">
                        <select name="hsn_code" id="hsn_code" class="form-control">
                          <option value="">--Select--</option>
                          <?php
                          $q1=mysqli_query($con,"SELECT * FROM `hsncode` ");
                          while($r1=mysqli_fetch_array($q1)):
                          ?>
                            <option value="<?= $r1['hsncode'] ?>"><?= $r1['hsncode'] ?></option>
                          <?php
                          endwhile;
                          ?>
                        </select>
                        <!-- <a href="javascript:void(0);" style="color: green;cursor:pointer" data-target="#add_hsn_modal" data-toggle="modal"><i class="fa fa-plus"></i> Add Medicine HSN</a> -->
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Barcode" class="col-sm-4 control-label">Barcode</label>
                      <div class="col-sm-8">
                        <input type="text" name="barcode" value="" id="barcode" placeholder="Barcode" class="form-control" autocomplete="off"  />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="MRP." class="col-sm-4 control-label">MRP.</label>
                      <div class="col-sm-8">
                        <input type="text" name="mrp" value="" id="mrp" placeholder="MRP." class="form-control" autocomplete="off"  />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Purchase" class="col-sm-4 control-label">Purchase</label>
                      <div class="col-sm-8">
                        <input type="text" name="purchase" value="" id="purchase" placeholder="Purchase Price" class="form-control" autocomplete="off"  />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Sale" class="col-sm-4 control-label">Sale</label>
                      <div class="col-sm-4">
                        <input type="text" name="sale_a" value="" id="sale_a" placeholder="Sale(A) Price" class="form-control" autocomplete="off"  />
                      </div>
                      <div class="col-sm-4">
                        <input type="text" name="sale_b" value="" id="sale_b" placeholder="Sale(B) Price" class="form-control" autocomplete="off"  />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="SGST(%)" class="col-sm-4 control-label">SGST(%)</label>
                      <div class="col-sm-8">
                        <input type="text" name="sgst" value="" id="sgst" placeholder="SGST(%)" class="form-control" autocomplete="off" />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="CGST(%)" class="col-sm-4 control-label">CGST(%)</label>
                      <div class="col-sm-8">
                        <input type="text" name="cgst" value="" id="cgst" placeholder="CGST(%)" class="form-control" readonly="true" autocomplete="off"  />
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="IGST(%)" class="col-sm-4 control-label">IGST(%)</label>
                      <div class="col-sm-8">
                        <input type="text" name="igst" value="" id="igst" placeholder="IGST(%)" class="form-control" readonly="true" autocomplete="off"  />
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <input type="hidden" name="id" id="id" value="" />
                    <input type="button" name="save" value="Submit" id="butsave" class="btn btn-info pull-left"  />
                    &nbsp;&nbsp;<a href="" class="btn btn-danger">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
            <div class="box box-info hidden viewtile">
            </div>
          </div>
        </div>
      </section>

      <!--  -->
        
      
      <!-------------List Content ----------------->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box list">
              <div class="box-header">
                <h3 class="box-title">Medicines</h3>
              </div>
              <div class="box-body table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Medicine Name</th>
                      <th>Category</th>
                      <th>Type</th>
                      <th>Unit</th>
                      <th>HSN</th>
                      <th>MRP</th>
                      <th>Purchase</th>
                      <th>Sale(A)</th>
                      <th>Sale(B)</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 <tbody id="medicineTabletbody">

                 </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include 'main_footer.php'; ?>
  </div>
  <?php include 'footer_links.php'; ?>
  <!-- Select2 -->
  <script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</body>
</html>


<script>
$(document).ready(function() {
  // Function to fetch and display data
  function fetchData() {
    $.ajax({
      url: 'select_data.php',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        var rows = '';
        if (data.length > 0) {
          $.each(data, function(index, item) {
            rows += '<tr>';
            rows += '<td>' + (index + 1) + '</td>';
            rows += '<td>' + item.med_name + '</td>';
            rows += '<td>' + item.med_category + '</td>';
            rows += '<td>' + item.med_type + '</td>';
            rows += '<td>' + item.med_unit + '</td>';
            rows += '<td>' + item.hsn_code + '</td>';
            rows += '<td>' + item.mrp + '</td>';
            rows += '<td>' + item.purchase + '</td>';
            rows += '<td>' + item.sale_a + '</td>';
            rows += '<td>' + item.sale_b + '</td>';
            rows += '<td>';
            rows += '<a title="Edit" href="#' + item.id + '" data-toggle="modal" data-target="#edit_medicine' + item.id + '"> <i class="fa fa-edit text-primary"></i> </a>';
            rows += '&nbsp; ';
            rows += '<a title="Delete" href="#' + item.id + '" data-toggle="modal" data-target="#delete_medicine' + item.id + '"> <i class="fa fa-trash text-danger"></i> </a>';
            rows += '</td>';
            rows += '</tr>';
          });
        } else {
          rows += '<tr><td colspan="11" class="text-center">No data available</td></tr>';
        }
        $('#medicineTabletbody').html(rows); // Populate table body with rows
      },
      error: function(xhr, status, error) {
        alert('Error fetching data: ' + error); // Handle error
      }
    });
  }

  // Call fetchData function on page load
  fetchData();
});
</script>

<script>


  $(function () {
    $('.select2').select2()
  })

  $(function () {
    $('#example1').DataTable()
  })

$(document).ready(function(){
  $("#sgst").keyup(function(){
    document.getElementById("cgst").value =  document.getElementById("sgst").value;
    var igst = document.getElementById("sgst").value * 2;
    document.getElementById("igst").value =  +igst;
  });
});



$(document).ready(function() {
  $('#butsave').on('click', function() {
    $("#butsave").attr("disabled", "disabled");
    var med_name = $('#med_name').val();
    console.log(med_name);
    var gen_name = $('#gen_name').val();
    var pack = $('#pack').val();
    var qty = $('#qty').val();
    var med_category = $('#med_category').val();
    var med_type = $('#med_type').val();
    var med_unit = $('#med_unit').val();
    var med_menufact = $('#med_menufact').val();
    var hsn_code = $('#hsn_code').val();
    var barcode = $('#barcode').val();
    var mrp = $('#mrp').val();
    var purchase = $('#purchase').val();
    var sale_a = $('#sale_a').val();
    var sale_b = $('#sale_b').val();
    var sgst = $('#sgst').val();
    if(med_name!="" && gen_name!="" && mrp!="" && purchase!="" && sale_a!="" && sale_b!="" && sgst!=""){
      $.ajax({
        url: "insert_data.php",
        type: "POST",
        data: {
          type: 7,
          med_name: med_name, gen_name: gen_name, pack: pack, qty: qty, med_category: med_category,
          med_type: med_type, med_unit: med_unit, med_menufact: med_menufact, hsn_code: hsn_code,
          barcode: barcode, mrp: mrp, purchase: purchase, sale_a: sale_a, sale_b: sale_b, sgst: sgst, 
        },
        cache: false,
        success: function(dataResult){
          console.log(dataResult)
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
      $("#butsave").removeAttr("disabled");
    }
  });
});


</script>