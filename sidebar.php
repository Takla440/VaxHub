<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>MiniVaxMates</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION["user"] ?></h6>
                        <?php if($_SESSION["role"] == "1")
                    {
                        
                  ?>
                    <span>Admin</span>
                    <?php } ?>
                        <?php if($_SESSION["role"] == "2")
                    {
                        
                  ?>
                    <span>Hospital</span>
                    <?php } ?>
                        <?php if($_SESSION["role"] == "3")
                    {
                        
                  ?>
                    <span>Parent</span>
                    <?php } ?>

                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="index.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div> -->
                    <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a> -->
        
                    <a href="request.php" class="nav-item nav-link"><i class="fa fa-comment-dots me-2"></i>Requests</a>

                    <a href="child.php" class="nav-item nav-link"><i class="fa fa-child me-2"></i>Child Details</a>
                    <?php if($_SESSION["role"] == "1")
                    {
                        
                  ?>
                    <a href="vaccine.php" class="nav-item nav-link"><i class="fa fa-syringe me-2"></i>Vaccine Details</a>
                    <a href="upcomingvaccine.php" class="nav-item nav-link"><i class="fa fa-syringe me-2"></i>Upcoming Vaccine </a>
                    <a href="hospital.php" class="nav-item nav-link"><i class="fa fa-hospital me-2"></i>Hospital Details</a>
                    <?php } ?>
                    <?php if($_SESSION["role"] == "3")
                    {
                        
                  ?>
                    <a href="parentrequest.php" class="nav-item nav-link"><<i class="fa fa-syringe me-2"></i>Vaccine Request</a>
                    <a href="upcomingvaccine.php" class="nav-item nav-link"><<i class="fa fa-syringe me-2"></i>Upcoming Vaccine </a>
                    <?php }?>
                    <div class="nav-item dropdown">
                        <a href="index.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Reports</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="childreport.php" class="dropdown-item">Vaccination Report</a>
                           

                        </div>
                    </div>
                    <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <div class="nav-item dropdown">
                        <a href="index.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.php" class="dropdown-item">Sign In</a>
                            <a href="signup.php" class="dropdown-item">Sign Up</a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>