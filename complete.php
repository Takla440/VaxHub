<?php
include "connect.php";
echo $_GET["id"];
$sql = "update request set status = 'Completed' where id ='".$_GET["id"]."'";
mysqli_query($con,$sql);
echo "<script>alert('Approved Successfully..!'); 
window.location.href='http://localhost:82/vaccination_management_system/adminpanel/dashmin/request.php';
</script>"
?> 