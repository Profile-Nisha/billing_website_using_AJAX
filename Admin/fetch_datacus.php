<?php
include '../action/config.php';


$result = mysqli_query($con, "SELECT * FROM `customer` ");

$data = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'address' => $row['address'],
            'email' => $row['email'],
            'mobile' => $row['mobile'],
            'gst' => $row['gst']
            
        );
    }
}


echo json_encode($data);

mysqli_close($con);
?>