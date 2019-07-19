<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#700000"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
  <title>Blood Requests</title>
    
  <!-- Bootstrap core stylesheet-->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Custom fonts for this template-->
  <link href='lib/fontawesome/css/all.min.css' rel='stylesheet'>
 
  <!-- Plugins stylesheet -->
  <link href='lib/normalize/normalize.css' rel='stylesheet'>

  <!-- Custom Style for all pages-->
  <link href="styles.css" rel="stylesheet">
    
  <!-- Bootstrap core JavaScript-->
  <script src="lib/jquery/jquery.min.js"></script>
    
</head>

<body>
<?php include('admin/function.php'); ?>
    
  <header class="header clearfix">
    <button type="button" id="toggleMenu" class="toggle_menu">
      <i class="fa fa-bars"></i>
    </button>
    <div class="cen">
    <div class="logo">
         <i class="fa fa-tint"></i>
    </div>
    <div class="maisha">Maisha</div>
    </div>
  </header>

  <nav class="vertical_nav">

    <ul id="js-menu" class="menu">
        
      <li class="menu--item">
        <a href="index.php" class="menu--link" title="Home">
          <i class="menu--icon  fa-fw fa fa-tint"></i>
          <span class="menu--label">Home</span>
        </a>
      </li>

      <li class="menu--item  menu--item__has_sub_menu">

        <label class="menu--link" title="Blood bank database">
          <i class="menu--icon  fa fa-fw fa-heartbeat"></i>
          <span class="menu--label">Bloodbank</span>
        </label>

        <ul class="sub_menu">
          <li class="sub_menu--item">
            <a href="requests.php" class="sub_menu--link">Request Blood</a>
          </li>
          <li class="sub_menu--item">
            <a href="donor/index.php" class="sub_menu--link">Donate Blood</a>
          </li>
          <li class="sub_menu--item">
            <a href="#" class="sub_menu--link">Other</a>
          </li>
        </ul>
      </li>

      <li class="menu--item">
        <a href="camps.php" class="menu--link" title="Active and complete camps">
          <i class="menu--icon  fa fa-fw fa-briefcase"></i>
          <span class="menu--label">Camps</span>
        </a>
      </li>

      <li class="menu--item">
        <a href="#" data-toggle="modal" data-target="#search" class="menu--link" title="Search for blood type">
          <i class="menu--icon  fa fa-fw fa-search"></i>
          <span class="menu--label">Search</span>
        </a>
      </li>

      <li class="menu--item  menu--item__has_sub_menu">

        <label class="menu--link" title="Log in area">
          <i class="menu--icon  fa fa-fw fa-user"></i>
          <span class="menu--label">Log In</span>
        </label>

        <ul class="sub_menu">
          <li class="sub_menu--item">
            <a href="donor/index.php" class="sub_menu--link">User Log in</a>
          </li>
          <li class="sub_menu--item">
            <a href="admin/adminlogin.php" class="sub_menu--link">Admin Log in</a>
          </li>
          <li class="sub_menu--item">
            <a href="registration.php" class="sub_menu--link">Register</a>
          </li>
        </ul>
      </li>
      <li class="menu--item">
        <a href="#" class="menu--link link__active" title="View blood requests">
          <i class="menu--icon  fa-fw fa fa-address-card"></i>
          <span class="menu--label">View Requests</span>
        </a>
      </li>
      <li class="menu--item">
        <a href="contact.php" class="menu--link" title="Contact us">
          <i class="menu--icon  fa fa-fw fa-phone"></i>
          <span class="menu--label">Contact</span>
        </a>
      </li>
    </ul>

    <button id="collapse_menu" class="collapse_menu">
      <i class="collapse_menu--icon  fa fa-fw"></i>
      <span class="collapse_menu--label">Minimize menu</span>
    </button>

  </nav>


  <div class="wrapper">
      
      
<!--/ Intro Single star /-->
  <section class="title">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Blood Requests</h1> 
              <span class="color-text-a">Results as of :<?php echo " " . date("l") . " " . date("d-m-Y") ; ?> </span> 
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Blood Requests
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
      
<section class="resume-section p-3 p-lg-5 d-flex align-items-center">
    <div class="w-100">
        <table class="table table-hover">
          <thead class="thead-light">
            <tr>
              <th scope="col">Blood Group</th>
              <th scope="col">Name</th>
              <th scope="col"></th>
              <th scope="col">Gender</th>
              <th scope="col">Age</th>
              <th scope="col">Contact No</th>
              <th scope="col">Email</th>
              <th scope="col">Required Till</th>
            </tr>
          </thead>
          <tbody>          

            <?php
            $cn=makeconnection();
            $s="select * from requestes,bloodgroup where requestes.bgroup=bloodgroup.bg_id";
                $result=mysqli_query($cn,$s);
                $r=mysqli_num_rows($result);
                //echo $r;
                while($data=mysqli_fetch_array($result))
                {
                    echo"<tr><td>$data[11]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[8]</td></tr>";
                }
                    mysqli_close($cn);
            ?>

          </tbody>
        </table>  
        <hr class="my-4">
      </div>
</section>
    
<!-- Modal --> 
<div id="search" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered" role="document"> 
       <div class="modal-content"> 
           <div class="modal-header"> 
            <h5 class="modal-title">Search:</h5> 
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div> 
		<form method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
		      <div class="form-group row d-flex justify-content-center h-100">
                <label for="sel1" class="col-sm-4 col-form-label">Select Blood Type:</label>
                <div class="col-sm-6">        
                    <select class="form-control" required="required" name="s2">
                        <option value="">Select</option> 
                        <?php
				        $cn=makeconnection();
				        $s="select * from bloodgroup";
				        $result=mysqli_query($cn,$s);
				        $r=mysqli_num_rows($result);
									//echo $r;
				        while($data=mysqli_fetch_array($result))
				        {
				        if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
				        {
				            echo "<option value=$data[0] selected>$data[1]</option>";
				        }
				        else
				        {
				            echo "<option value=$data[0]>$data[1]</option>";
				        }	
				        }
				        mysqli_close($cn);
				        ?> 
                    </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="sbmt" value="Search" class="btn btn-primary">
                <input type="button" value="Cancel" class="btn btn-warning" data-dismiss="modal">
            </div> 
		</form>
      </div> 
  </div> 
</div> 
<!-- End Modal -->
      
	<?php 
	if(isset($_POST["sbmt"]))
	{
		//header("location:result.php?bg=".$_POST["s2"]);
		echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
	}

	?>      
      
</div>

  <!-- Custom Script for all pages-->
  <script src="js/vertical-responsive-menu.min.js"></script>
   
  <!-- Bootstrap core JavaScript -->
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="lib/jquery-easing/jquery.easing.min.js"></script>
  <script src="lib/jquery-easing/jquery.easing.compatibility.js"></script>

</body>
</html>