<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index-2.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <?php
                  include "connect.php";
                  if($_SESSION["role"] == "1")
                  {
                    $sql = "select r.*,r.id as rid,c.name as cname,v.name as vname,h.name as hname,u.name as uname,c.id,v.id,u.id,h.id from request r,vaccine v,hospital h,user u,child c where child = c.id and vaccine = v.id and parent = u.id and hospital = h.id and status='Pending' limit 5";
                  }
                  else if($_SESSION["role"] == "3"){
                    $sql = "select r.*,r.id as rid,c.name as cname,v.name as vname,h.name as hname,u.name as uname,c.id,v.id,u.id,h.id from request r,vaccine v,hospital h,user u,child c where child = c.id and vaccine = v.id and parent = u.id and hospital = h.id and parent = '".$_SESSION["userid"]."' limit 5";
                  }
                  else
                  {
                    $sql = "select r.*,r.id as rid,c.name as cname,v.name as vname,h.name as hname,u.name as uname,c.id,v.id,u.id,h.id from request r,vaccine v,hospital h,user u,child c where child = c.id and vaccine = v.id and parent = u.id and hospital = h.id and hospital = '".$_SESSION["userid"]."'and status='Approved' limit 5";
                  }
                  $record = mysqli_query($con,$sql);
                //   print_r(mysqli_fetch_array($record));
                  
                  while($row = $record->fetch_array(MYSQLI_ASSOC))
                  {
                  ?>
                        <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Requester Name:<?= $row["cname"]?></h6>
                                <small>Vaccine Name:<?= $row["vname"]?></small>
                            </a>
                            <hr class="dropdown-divider">
                            <?php }?>
                            <a href="request.php" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["user"] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="signout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>