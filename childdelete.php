<?php
include "connect.php";
echo $_GET["id"];
$sql = "delete from child where id= '".$_GET["id"]."'";
mysqli_query($con,$sql);
echo "<script>alert('Deleted Successfully..!'); 
window.location.href='http://localhost:82/vaccination_management_system/adminpanel/dashmin/child.php';
</script>"
?>