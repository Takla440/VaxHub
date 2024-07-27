<?php
session_start();
session_destroy();
echo "<script>
window.location.href = 'http://localhost:82/vaccination_management_system/adminpanel/dashmin/signin.php';

</script> "
?>