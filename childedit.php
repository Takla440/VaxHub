<?php session_start();
if(isset($_SESSION['user']))
{

    include "connect.php";
$sql = "select * from child where id = '".$_GET ["id"]."'";
$record = mysqli_query($con,$sql);
$result = mysqli_fetch_array($record);
?>

<!DOCTYPE html>

<?php


?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminpanel/dashmin/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
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

    <link rel="stylesheet" href="https://cdns/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


        <!-- Sidebar Start -->
        <?php include "sidebar.php"?>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include "navbar.php"?>
            <!-- Navbar End -->
            <div class="content d-flex justify-content-center align-items-center">


            <!-- Form Start -->
            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $result["name"] ?>"name="name">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Father Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $result["fname"] ?>"name="fname">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $result["dob"] ?>"name="dob">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Place Of Birth</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $result["pob"] ?>"name="pob">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">City</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $result["city"] ?>"name="city">
                                </div>
                                
                                <button type="submit" class="btn btn-outline-primary m-2" name="btn_submit"><i class="fa fa-refresh me-2"></i>Update Child</button>
                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- Form End -->
</div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">VAXHUB</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">Waniya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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


<!-- Mirrored from adminpanel/dashmin/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
</html>

<?php
if(isset($_POST["btn_submit"]))
{
  $name = $_POST["name"];
  $fname = $_POST["fname"];
  $dob = $_POST["dob"];
  $pob = $_POST["pob"];
  $city = $_POST["city"];

  $sql = "update child set name = '".$name."' ,fname = '".$fname."', dob = '".$dob."' ,pob = '".$pob."' ,city = '".$city."' where id = '".$_GET['id']."'";
  echo $sql;
  
  $reuslt = mysqli_query($con,$sql);
  if($reuslt){echo "<script>alert('Update Successfully..!')</script>";
    echo "<script>
    window.location.href = 'http://localhost:82/vaccination_management_system/adminpanel/dashmin/child.php'
    
    </script> ";
   ?>
    <script>
      if (window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
    </script>

    <?php
    
  
  }
  
  else{
    echo "<script>alert('Not Add ..!')</script>";
    
    
  }
}
}
else
{
  echo "<script>
window.location.href = 'http://localhost:82/vaccination_management_system/adminpanel/dashmin/signin.php'

</script> ";
}
?>