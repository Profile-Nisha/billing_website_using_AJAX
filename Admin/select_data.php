<?php
include '../action/config.php'; // Include your database connection file

$query = "SELECT * FROM `product` "; // Adjust query as needed
$result = mysqli_query($con, $query);

$data = array();
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row; // Add each row to $data array
  }
}

header('Content-Type: application/json');
echo json_encode($data); // Return JSON encoded data
?>
