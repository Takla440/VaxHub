<?php
include "connect.php";
echo $_GET["id"];
$sql = "delete from upcomingvaccine where vid= '".$_GET["id"]."'";
mysqli_query($con,$sql);
echo "<script>alert('Deleted Successfully..!'); 
window.location.href='http://localhost:82/vaccination_management_system/adminpanel/dashmin/upcomingvaccine.php';
</script>"
?>