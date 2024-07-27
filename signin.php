<?php session_start();?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminpanel/dashmin/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.html" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="../../cdns/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../../jsdeliver/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->

        <form class="container-fluid" method="post">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index-2.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                           
                            <a href="#">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="btn_submit">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </form>
       
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="../../jquery/jquery-3.4.1.min.js"></script>
    <script src="../../jsdeliver/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from adminpanel/dashmin/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
</html>

<?php
if(isset($_POST["btn_submit"]))
{
  include "connect.php";
  $email = $_POST["email"];
  $pass = $_POST["password"];
  $sql = "select * from user where email = '".$email."'and pass = '".$pass."'" ;
  $sql2 = "select * from hospital where email = '".$email."'and pass = '".$pass."'" ;

  $result = mysqli_query($con,$sql);
  $record = mysqli_fetch_array($result);

  $result2 = mysqli_query($con,$sql2);
  $record2 = mysqli_fetch_array($result2);
  if(mysqli_num_rows($result)>=1){

    $_SESSION["user"] = $record['name'];
    $_SESSION["userid"] = $record["ID"];
    $_SESSION["role"] = $record["userrole"];
    // $_SESSION["rname"] = $record["rolename"];
    
    echo "
    <script>alert('Login Successfully..!');
    window.location.href='http://localhost:82/vaccination_management_system/adminpanel/dashmin/index.php';
    </script>";

  }
  else if(mysqli_num_rows($result2)>=1){

    $_SESSION["user"] = $record2['name'];
    $_SESSION["userid"] = $record2["id"];
    $_SESSION["role"] = "2";
    // $_SESSION["rname"] = $record["rolename"];
    
    echo "
    <script>alert('Login Successfully..!');
    window.location.href='http://localhost:82/vaccination_management_system/adminpanel/dashmin/index.php';
    </script>";

  }
  else{
    echo "
    <script>alert('Login Failed..!);
    
    
    </script>";
  }
}
?>