<?php
include('login.php'); // Include Login Script
if ((isset($_SESSION['email']) != '')) 
{
header('Location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#700000"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
  <title>User LogIn</title>
    
  <!-- Bootstrap core stylesheet-->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Custom fonts for this template-->
  <link href='../lib/fontawesome/css/all.min.css' rel='stylesheet'>
 
  <!-- Plugins stylesheet -->
  <link href='../lib/normalize/normalize.css' rel='stylesheet'>

  <!-- Custom Style for all pages-->
  <link href="../styles.css" rel="stylesheet">
    
  <!-- Bootstrap core JavaScript-->
  <script src="../lib/jquery/jquery.min.js"></script>
  
</head>

<body>
<?php include('../admin/function.php'); ?>
    
  <header class="header clearfix">
    <button type="button" id="toggleMenu" class="toggle_menu">
      <i class="fa fa-bars"></i>
    </button>
    <div class="cen">
    <div class="logo">
         <i class="fa fa-tint"></i>
    </div>
    <div class="maisha">MAISHA</div>
    </div>
  </header>

<nav class="vertical_nav">

    <ul id="js-menu" class="menu">
        
      <li class="menu--item">
        <a href="../index.php" class="menu--link" title="Home">
          <i class="menu--icon  fa-fw fa fa-tint"></i>
          <span class="menu--label">Home</span>
        </a>
      </li>

      <li class="menu--item menu--item__has_sub_menu">

        <label class="menu--link" title="Blood bank database">
          <i class="menu--icon  fa fa-fw fa-heartbeat"></i>
          <span class="menu--label">Bloodbank</span>
        </label>

        <ul class="sub_menu">
          <li class="sub_menu--item">
            <a href="../requests.php" class="sub_menu--link">Request Blood</a>
          </li>
          <li class="sub_menu--item">
            <a href="#" class="sub_menu--link sub_menu--link__active">Donate Blood</a>
          </li>
          <li class="sub_menu--item">
            <a href="#" class="sub_menu--link">Other</a>
          </li>
        </ul>
      </li>

      <li class="menu--item">
        <a href="../camps.php" class="menu--link" title="Active and complete camps">
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

      <li class="menu--item  menu--item__has_sub_menu menu--subitens__opened">

        <label class="menu--link" title="Log in area">
          <i class="menu--icon  fa fa-fw fa-user"></i>
          <span class="menu--label">Log In</span>
        </label>

        <ul class="sub_menu">
          <li class="sub_menu--item">
            <a href="#" class="sub_menu--link sub_menu--link__active">User Log in</a>
          </li>
          <li class="sub_menu--item">
            <a href="../admin/adminlogin.php" class="sub_menu--link">Admin Log in</a>
          </li>
          <li class="sub_menu--item">
            <a href="../registration.php" class="sub_menu--link">Register</a>
          </li>
        </ul>
      </li>
      <li class="menu--item">
        <a href="../viewrequests.php" class="menu--link" title="View blood requests">
          <i class="menu--icon  fa-fw fa fa-address-card"></i>
          <span class="menu--label">View Requests</span>
        </a>
      </li>
      <li class="menu--item">
        <a href="../contact.php" class="menu--link" title="Contact us">
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


<div class="wrapper user-bg">  
    
  
<div class="container h-100">
    <div class="d-flex align-items-center justify-content-center h-100">
        
            <div class="card l-in">
			<div class="card-header">
				<h3>User Log In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fas fa-user-cog"></i></span>
				</div>
			</div>
			<div class="card-body pb-0">
				<form method="post" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="email" name="t1" required="required" class="form-control" placeholder="Email address ">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password"name="t2" required="required" class="form-control" placeholder="Password">
					</div>
                    <div class="d-flex justify-content-center text-danger"><?php echo $error;?></div> 
                    <hr class="my-2">
					<div class="form-group d-flex justify-content-center my-2">
						<input type="submit" name="submt" value="Login" class="btn login_btn">
					</div>
				</form>
			</div>
                
			<div class="card-footer">
				<div class="d-flex justify-content-center reg">
					<p class="text-light">Don't have an account? <a href="../registration.php#"> Sign Up</a></p>
				</div>
				<div class="d-flex justify-content-center reg">
					<a href="#" onclick="goBack()">Forgot your password?</a>
				</div>
                <script>
                function goBack(){
                    window.history.back();
                }
                </script>
			</div>
        </div>
        
    </div>
</div>

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
                    <?php
                    if(isset($_POST["show"]))
                    {
                    $cn=makeconnection();
                    $s="select * from bloodgroup where bg_name='" .$_POST["s2"] ."'";
                        $result=mysqli_query($cn,$s);
                        $r=mysqli_num_rows($result);
                        //echo $r;
                        $data=mysqli_fetch_array($result);
                        $bg_id=$data[0];
                        $bg_name=$data[1];

                        mysqli_close($cn);
                    }
                    ?>
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
		echo "<script>location.replace('../result.php?bg=". $_POST["s2"] ."');</script>";
	}

	?>      

</div>

  <!-- Custom Script for all pages-->
  <script src="../js/vertical-responsive-menu.min.js"></script>
   
  <!-- Bootstrap core JavaScript -->
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script> 

  <!-- Plugin JavaScript -->
  <script src="../lib/jquery-easing/jquery.easing.min.js"></script>
    
</body>
</html>