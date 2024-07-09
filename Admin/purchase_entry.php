<?php
// Connect to your database (adjust these parameters as needed)
include '../action/config.php';

// Process the form data
if (isset($_POST['save'])) {
    $pro_id = $_POST['pro_id'];
    $batch = $_POST['batch'];
    $exp_date = $_POST['exp_date'];
    
    $qty = $_POST['qty'];
    $discount = $_POST['discount'];
    
    // // Insert data into the database
     $sql = "INSERT INTO purchase_table (pro_id, batch, exp_date, qty, discount) 
             VALUES ('$pro_id', '$batch', '$exp_date', '$qty', '$discount')";

     if (mysqli_query($con, $sql)) {
         echo "Data inserted successfully";
     } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>
