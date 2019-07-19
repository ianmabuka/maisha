<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="theme-color" content="#4e73df"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Maisha - Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href='../lib/fontawesome/css/all.min.css' rel='stylesheet' type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>


<body id="page-top">
<?php include('function.php'); ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <i class="fas fa-tint red"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MAISHA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-sitemap"></i>
          <span>Admin Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Database
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Add</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ADD TO DATABASE:</h6>
            <?php if($_SESSION["usertype"]=="Admin")
            {?> 
            <a class="collapse-item" href="adduser.php">Add User</a>
            <?php }?>
            <a class="collapse-item" href="addstate.php">Add State</a>
            <a class="collapse-item" href="addcity.php">Add City</a>
            <a class="collapse-item" href="addcamp.php">Add Camp</a>
            <a class="collapse-item" href="addgallery.php">Add Gallery</a>
            <a class="collapse-item" href="addnews.php">Add News</a>
            <a class="collapse-item" href="addadvert.php">Add Advert</a>
          </div>
        </div>
      </li>
 
      <!-- Nav Item - Utilities Collapse Menu -->
      <?php if($_SESSION["usertype"]=="Admin")
        {?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Update</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Update:</h6>
            <a class="collapse-item" href="updateuser.php">Update User</a>
            <a class="collapse-item" href="updatestate.php">Update State</a>
            <a class="collapse-item" href="updatecity.php">Update City</a>
            <a class="collapse-item" href="updatecamp.php">Update Camp</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Delete:</h6>
            <a class="collapse-item" href="deluser.php">Delete User</a>
            <a class="collapse-item" href="delstate.php">Delete State</a>
            <a class="collapse-item" href="delcity.php">Delete City</a>
            <a class="collapse-item" href="delcamp.php">Delete Camp</a>
            <a class="collapse-item" href="delgallery.php">Delete Gallery</a>
            <a class="collapse-item" href="delnews.php">Delete News</a>
            <a class="collapse-item" href="deladvert.php">Delete Advert</a>
          </div>
        </div>
      </li>
      <?php }?>
        
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Reports
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>View</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Fetch From Database:</h6>
            <a class="collapse-item" href="viewgroups.php">View Blood Groups</a>
            <a class="collapse-item" href="viewstates.php">View States</a>
            <a class="collapse-item" href="viewcities.php">View Cities</a>
            <a class="collapse-item" href="viewcamps.php">View Camps</a>
            <a class="collapse-item" href="viewnews.php">View News</a>
            <a class="collapse-item" href="viewadverts.php">View Adverts</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Users</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <?php
                    $cn=makeconnection();
                    $queryString ="SELECT COUNT(*) AS total FROM contacts";
                    $query = mysqli_query($cn,$queryString);
                    $row = mysqli_fetch_object($query);

                    mysqli_close($cn);
                ?>   
                <span class="badge badge-danger badge-counter"><?php echo $row->total?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6> 
                <?php
                    $cn=makeconnection();
                    $s="select * from contacts";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                    //echo $r;
                    
                    $n=0;
                    while($data=mysqli_fetch_array($result))
                    {    
                        if($n%2==0)
                        {
                    ?>

                    <?php

                    }
                ?>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate"><?php echo $data[4]; ?></div>
                    <div class="small text-gray-500"><?php echo $data[2]; ?></div>
                  </div>
                </a>
                <?php
                    if($n%2==1)
                   {
                   ?>

                <?php
                    }
                    $n=$n+1;

                }?>
            
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <?php	
                    $cn=makeconnection();
                            $s="select * from users where username='". $_SESSION["username"]."'";	
                    $q=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($q);
                    $data=mysqli_fetch_array($q);

                    $username=$data[0];
                    $pic=$data[3];
                    //echo $name;
                    mysqli_close($cn);
                ?>
                
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 "><?php echo $username; ?></span>
                <img class="img-profile rounded-circle" src="dp/<?php echo $pic; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <?php
                $cn=makeconnection();
                $queryString ="SELECT COUNT(*) AS total FROM donarregistration";
                $query = mysqli_query($cn,$queryString);
                $row = mysqli_fetch_object($query);
                    
                mysqli_close($cn);
            ?>  
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">NUMBER OF USERS (REGISTERED)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row->total ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Total Donations (All time) -->
            <?php
                $cn=makeconnection();
                $queryString ="SELECT COUNT(*) AS total FROM donation";
                $query = mysqli_query($cn,$queryString);
                $row = mysqli_fetch_object($query);
                    
                mysqli_close($cn);
            ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Donations (All time)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row->total ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tint fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Camps -->
            <?php
                $cn=makeconnection();
                $queryString ="SELECT COUNT(*) AS total FROM camp";
                $query = mysqli_query($cn,$queryString);
                $row = mysqli_fetch_object($query);
                    
                mysqli_close($cn);
            ?>
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-2">Camps (<?php echo $row->total?>)</div>
                      <div class="mb-0 progress">
                          <div class="progress-bar bg-info" placeholder="Complete"role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests -->
            <?php
                $cn=makeconnection();
                $queryString ="SELECT COUNT(*) AS total FROM requestes";
                $query = mysqli_query($cn,$queryString);
                $row = mysqli_fetch_object($query);
                    
                mysqli_close($cn);
            ?> 
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row->total ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Registration Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Reistration graph:</div>
                      <a class="dropdown-item active" href="#">Annual</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">All time</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                      <a class="dropdown-item" href="#">Daily</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">User Interaction</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Interaction chart:</div>
                      <a class="dropdown-item active" href="#">Overall</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Neutral Users</a>
                      <a class="dropdown-item" href="#">Donations</a>
                      <a class="dropdown-item" href="#">Requests</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Neutral Users
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Donations
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Requests
                    </span>
                  </div>
                </div>
                  
              </div>
            </div>
              
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           <span>Copyright &copy; Maisha 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../lib/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="lib/chart/Chart.min.js"></script>
  <script src="lib/chart/chart-area-registration.js"></script>
  <script src="lib/chart/chart-pie-interaction.js"></script>

</body>

</html>
