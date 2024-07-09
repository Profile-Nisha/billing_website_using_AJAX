<?php
// Include your database configuration file
include '../action/config.php';

// Perform SQL query to fetch categories from the database
$query = "SELECT * FROM `category` ";
$result = mysqli_query($con, $query);

if (!$result) {
    // If query fails, return an error response
    $response = array(
        'success' => false,
        'message' => 'Query error: ' . mysqli_error($con)
    );
} else {
    // Fetch data and build response array
    $categories = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = array(
            'id' => $row['id'],
            'category' => $row['category']
            // Add more fields if needed
        );
    }
    // Set success response with category data
    $response = array(
        'success' => true,
        'categories' => $categories
    );
}

// Convert PHP array to JSON
header('Content-Type: application/json');
echo json_encode($response);

// Close database connection
mysqli_close($con);
?>
