<?php
// Include your database configuration file
include '../action/config.php';

// Initialize response array
$response = array();

// Perform SQL query to fetch generics from the database
$query = "SELECT * FROM `generics` ";
$result = mysqli_query($con, $query);

if ($result) {
    // Fetch data and build response array
    $generics = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $generics[] = $row; // Add each row to the generics array
    }
    // Set success response with generics data
    $response['success'] = true;
    $response['generics'] = $generics;
} else {
    // If query fails, set error response
    $response['success'] = false;
    $response['message'] = 'Error fetching data: ' . mysqli_error($con);
}

// Convert PHP array to JSON
header('Content-Type: application/json');
echo json_encode($response);

// Close database connection
mysqli_close($con);
?>
