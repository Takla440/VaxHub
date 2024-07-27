<?php
include "connect.php";

$vaccineId = $_GET["vaccineId"];

// Query to get hospitals based on the selected vaccine
$sqlHospital = "select * from hospital h,upcomingvaccine v where vname = '".$vaccineId."' and h.id = hname";
$resultHospital = mysqli_query($con, $sqlHospital);
$hospitals = mysqli_fetch_all($resultHospital, MYSQLI_ASSOC);



// Prepare the response
$response = array("hospitals" => $hospitals);

// Send the response as JSON
echo json_encode($response);
?>
