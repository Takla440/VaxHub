<?php session_start();?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminpanel/dashmin/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.html" rel="icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="https://jquery/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

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


        <!-- Sidebar Start -->
        <?php include "sidebar.php"?>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include "navbar.php"?>

            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
  
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
          
            <form method="get">
            <h6 class="mb-4">Select Dates to generate Report</h6>
            <div class="input-group mb-3">
            <span class="input-group-text">Start Date</span>
                                <input type="date" class="form-control" name="sd" placeholder="Select Start Date" aria-label="Username">
                                <span class="input-group-text">End Date</span>
                                <input type="date" class="form-control" placeholder="Select End Date" name="ed" aria-label="Server">
                                <button class="btn btn-outline-primary" name="btn_submit" type="submit">Generate</button>
                            </div>

            </fortm>
            </div>
            </div>
            </div>
            <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <h6 class="mb-4">Vaccine Details</h6>
                </div>
                <div class="table-responsive">
                    <table id="vaccineTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Child Name</th>
                                <th scope="col">Vaccine</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Date and Time</th>
                                <th scope="col">Parent name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "connect.php";
                            if (isset($_GET["btn_submit"])) {
                                $sql = "select * from request ";

                                $record22 = mysqli_query($con, $sql);
                                
                                while ($row22 = mysqli_fetch_array($record22)) {
                                    $sql1 = "select * from hospital where id ='".$row22["hospital"]."'";

                                    $record1 = mysqli_query($con, $sql1);
                                    $row1 = mysqli_fetch_array($record1);

                                    $sql2 = "select * from vaccine where id ='".$row22["vaccine"]."'";

                                    $record2 = mysqli_query($con, $sql2);
                                    $row2 = mysqli_fetch_array($record2);

                                    $sql3 = "select * from child where id ='".$row22["child"]."'";

                                    $record3 = mysqli_query($con, $sql3);
                                    $row3 = mysqli_fetch_array($record3);

                                    $sql4 = "select * from user where id ='".$row22["parent"]."'";

                                    $record4 = mysqli_query($con, $sql4);
                                    $row4 = mysqli_fetch_array($record4);
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $row22["id"] ?></th>
                                        <td><?php echo $row3["name"] ?></td>
                                        <td><?php echo $row2["name"] ?></td>
                                        <td><?php echo $row1["name"] ?></td>
                                        <td><?php echo $row22["date"] ?> <?php echo $row22["time"] ?></td>
                                        <td><?php echo $row4["name"] ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">VAXHUB</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#">Waniya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>

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
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#vaccineTable').DataTable();
        });
    </script>
</body>


<!-- Mirrored from adminpanel/dashmin/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 12:43:51 GMT -->
</html>