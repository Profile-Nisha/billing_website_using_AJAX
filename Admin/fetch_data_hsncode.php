<?php
// Include your database configuration file
include '../action/config.php';

// Initialize response array
$response = array();

// Perform SQL query to fetch hsncodes from the database
$query = "SELECT * FROM `hsncode` ";
$result = mysqli_query($con, $query);

if ($result) {
    // Fetch data and build response array
    $hsncodes = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $hsncodes[] = $row; // Add each row to the hsncodes array
    }
    // Set success response with hsncodes data
    $response['success'] = true;
    $response['hsncodes'] = $hsncodes;
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
