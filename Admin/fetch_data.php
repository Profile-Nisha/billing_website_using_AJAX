<?php include '../action/config.php'; 

$sql = "SELECT * FROM supplier";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(array()); 
}

$con->close();

?>

