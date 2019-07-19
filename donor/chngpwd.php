<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="theme-color" content="#700000"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Change Password</title>

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
	$name=$data[1];
    $name2=$data[2];
	$pic=$data[9];
	
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
          <a class="nav-link" href="viewdonations.php">View Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Change Password</a>
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
        <h4 class="mb-2">CHANGE PASSSWORD</h4>

        <div class="subheading mb-3">UPDATE &amp; MODIFY PASSWORD FOR :
          <p><a href="index.php"><?php echo @$name;  ?>
          <span class="text-primary"><?php echo @$name2;  ?></span></a></p>
          </div>
          
          <hr class="my-4">
          
          <div class="container">
              <div class="row">
                <div class="col-sm-8">
                
                     <div class="jumbotron shadow-sm py-4">
                          <h5>Details</h5>
                          <hr class="my-3">
                         
                         <form class="form-horizontal" method="post">
                             
                             <div class="form-group row">
                                 <label for="inputEmail" class="col-sm-3 col-form-label" >Old Password:</label>
                                 <div class="col-sm-9">
                                    <input type="password" class="form-control" name="t2" placeholder="Old Password" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="inputEmail" class="col-sm-3 col-form-label" >New Password:</label>
                                 <div class="col-sm-9">
                                    <input type="password" class="form-control" name="t3" placeholder="New Password" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="inputEmail" class="col-sm-3 col-form-label" >Confirm Password:</label>
                                 <div class="col-sm-9">
                                    <input type="password" class="form-control" name="t4" placeholder="Confirm Password" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password">
                                 </div>
                             </div>
                             <?php
                            if(isset($_POST["sbmt"])) 
                            {
                                $cn=makeconnection();			
                                    $s="select *from donarregistration where email='" .$_SESSION["email"] . "' and  pwd='" .$_POST["t2"] . "'";
                                $q=mysqli_query($cn,$s);
                                $r=mysqli_num_rows($q);

                                if($r>0)
                                {

                                $s1="update donarregistration set pwd='" . $_POST["t3"]  ."' where email='" .$_SESSION["email"] ."'";
                                mysqli_query($cn,$s1);
                                mysqli_close($cn);
                                echo '<p class="text-success text-center">Password updated succesfully.</p>';

                                }
                                else
                                {
                                    echo '<p class="text-danger text-center">Invalid old Password.</p>';
                                }

                                    }	

                            ?>
                             <hr class="my-3">
                              <p class="lead">
                                <center><input type="submit" value="Change" name="sbmt" class="btn btn-danger btn-sm"></center>
                              </p>
                          </form> 
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    
                    <div class="jumbotron shadow-sm py-4">
                          <h5>Tips</h5>
                          <hr class="my-2">
                            <p>1.Make your password long.</p>
                            <p>2.Make your password a nonsense phrase.</p>
                            <p>3.Include numbers, symbols and uppercase and lowercase.</p>
                            <p>4.Do not reuse password.</p>
                            <p>5.Start using a password manager.</p>
                    </div>
  
                </div>
              </div>
          </div>

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
