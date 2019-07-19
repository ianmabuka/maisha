<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="theme-color" content="#700000"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Donate Blood</title>

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
          <a class="nav-link active" href="#">Donate Blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewdonations.php">View Donations</a>
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

<section class="content-section p-lg-5 d-flex align-items-center">
    <div class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                   <div class="jumbotron shadow">
                      <h5 class="text-center mb-3">Donation Form</h5>
                      <hr class="my-2">
                        <p class="lead text-center">
                            By donating blood your are able to save a life of someone somewhere.Who is urgently in need of blood transfusion.
                        </p>
                    <form method="post" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="sel1" class="col-sm-2 col-form-label">Select Camp</label>
                            <div class="col-sm-10">        
                              <select class="form-control" name="s1">
                                <option value="">None</option>
                                  
                                <?php
                                    $cn=makeconnection();
                                    $s="select * from camp";
                                        $result=mysqli_query($cn,$s);
                                        $r=mysqli_num_rows($result);
                                        //echo $r;
                                        while($data=mysqli_fetch_array($result))
                                        {
                                            if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
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
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Date:</label>
                            <div class="col-sm-10">
                                 <input type="date" class="form-control" name="t2" required="required">   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="units" class="col-sm-2 col-form-label" >No of units</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="t3" required="required">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comment" class="col-sm-2 col-form-label">Other details:</label>
                            <div class="col-sm-10">
                             <textarea class="form-control" rows="3" name="t4" id="comment"></textarea>   
                            </div>
                        </div>       
                          <?php
                            if(isset($_POST["sbmt"])) 
                            {
                            $cn=makeconnection();
                                $s="insert into donation(camp_id,ddate,units,detail,email) values('" . $_POST["s1"] . "','". $_POST["t2"] ."' ,'" . $_POST["t3"] . "','" . $_POST["t4"] . "','". $_SESSION["email"] ."')";

                                        //INSERT INTO `donation`(`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
                                mysqli_query($cn,$s);
                                mysqli_close($cn);
                                echo '<p class="text-success text-center">Record updated succesfully.</p>';
                            }

                            ?>
                        <hr class="my-4">
                        <center><input type="submit" value="Save" name="sbmt" class="btn btn-success btn-sm"></center>
                    </form> 
                </div> 
                </div>
                
                <div class="col-sm-3">
                    <div class="content-date text-md-right">
                        <span class="text-primary">
                            <?php
                            echo "Today is : " . date("l") . "<br>";
                            echo "" . date("d-m-Y") . "<br>";
                            ?>
                        </span>
                    </div>  
                </div> 
                
              </div><!-- Row end -->
          </div><!-- Container end -->
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
