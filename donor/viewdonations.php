<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="theme-color" content="#700000"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Blood Donations</title>
    
  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/donor.css" rel="stylesheet">

</head>

<body id="page-top">
<?php include('../admin/function.php'); ?>
<?php
	$cn=makeconnection();
			$s="select * from donarregistration where email='$login_user'";	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$pic=$data[9];
	//echo $name;
	mysqli_close($cn);
	
?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top py-0" id="sideNav">
    <a class="navbar-brand js-scroll-trigger py-0" href="home.php">
      <span class="d-block d-lg-none maisha">MAISHA</span>
      <span class="d-none d-lg-block">
        <img class="prof-img img-fluid img-profile rounded-circle mx-auto mb-2" src="../doner_pic/<?php echo @$pic; ?>" alt="Profile Image">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blooddonated.php">Donate Blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">View Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="chngpwd.php">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewrequests.php">View Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#logOut" href="#">Log Out</a>    
        </li>
      </ul>
    </div>
  </nav>

<div class="container-fluid p-0">

<section class="content-section p-3 p-lg-5 d-flex align-items-center">
      <div class="w-100">
        <h4 class="mb-2">Blood Donations</h4>
        <h5 class="mb-0">Real time results as of on:</h5>
        <div class="subheading mb-3">
            <?php
            echo "Today : " . date("l");
            echo " · " . date("d-m-Y");
            echo " · " . date("h:i:sa");
            ?>
        </div>
          
          
<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">Camp Name</th>
      <th scope="col">Date of Donation</th>
      <th scope="col">No. of Units</th>
      <th scope="col">Email Address</th>
    </tr>
  </thead>
  <tbody>     
    <?php
    $cn=makeconnection();
    $s="select * from camp,donation where camp.camp_id=donation.camp_id and donation.email='" . $_SESSION["email"] . "'";
        $result=mysqli_query($cn,$s);
        $r=mysqli_num_rows($result);
        //echo $r;
        while($data=mysqli_fetch_array($result))
        {
            echo"<tr><td>$data[1]</td><td>$data[11]</td><td>$data[12]</td><td>$data[14]</td></tr>";
                }
          mysqli_close($cn);
    ?>   
      
  </tbody>
</table>  
          
          <hr class="my-4">

      </div>
</section>
      
<!-- Modal --> 
     <div id="logOut" class="modal fade"> 
      <div class="modal-dialog"> 
       <div class="modal-content"> 
        <div class="modal-header"> 
         <h5 class="modal-title">Confirmation</h5> 
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div> 
        <div class="modal-body"> 
         <p>Are you sure you want to log out?</p> 
         <p class="text-warning"><small>By loging out your session will terminate.</small></p> 
        </div> 
        <div class="modal-footer"> 
         <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">No : Go back.</button> 
         <a href="logout.php" class="btn btn-sm btn-warning">Yes : Log Out</a>
        </div> 
       </div> 
      </div> 
     </div> 
<!-- End Modal --> 

  </div>
    
  <!-- Bootstrap core JavaScript -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../lib/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
