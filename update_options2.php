<?php
include "connect.php";

$vaccineId = $_GET["vaccineId"];

// Query to get hospitals based on the selected vaccine
$sqlHospital = "select date from upcomingvaccine where hname = '".$vaccineId."'";
$resultHospital = mysqli_query($con, $sqlHospital);
$dates  = mysqli_fetch_all($resultHospital, MYSQLI_ASSOC);



// Prepare the response
$response = array("dates" => $dates);
// Send the response as JSON
echo json_encode($response);
?>
