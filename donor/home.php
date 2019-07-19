<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="theme-color" content="#700000"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Maisha User-Area</title>
    
  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Fontawesome core CSS -->
  <link href="../lib/fontawesome/css/all.min.css" rel="stylesheet">

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
	$gender=$data[3];
	$age=$data[4];
	$mobile=$data[5];
    $email=$data[7];
	$pic=$data[9];
	//echo $name;
	mysqli_close($cn);
	
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top py-0" id="sideNav">
    <a class="navbar-brand js-scroll-trigger py-0" href="#">
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
          <a class="nav-link active" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blooddonated.php">Donate Blood</a>
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

    <section class="content-section p-3 p-lg-5 d-flex align-items-center">
      <div class="w-100">
          
        <h1 class="mb-0"><?php echo @$name;  ?>
          <span class="text-primary"><?php echo @$name2;  ?></span>   
        </h1>
        <div class="home mb-3">
            <div class="action-icons">
                <a><i class="fab"><?php echo @$age;?></i></a>
                 · <?php echo @$gender;?> · 
            </div>
            <p>Mobile: <?php echo @$mobile;?></p>
            <p>Group:
                <?php
                    $cn=makeconnection();
                    $s="select * from bloodgroup where $data[6]=bloodgroup.bg_id";
                        $result=mysqli_query($cn,$s);
                        $r=mysqli_num_rows($result);
                        //echo $r;
                        while($data=mysqli_fetch_array($result))
                        {
                            echo"<tr><td>$data[1]</td>";
                        }
                            mysqli_close($cn);
                    ?>
            </p>
            <p><a href="mailto:<?php echo @$email;?>"><?php echo @$email;?></a></p>
        </div>
        <p class="lead mb-3">These are the records and corresponding details respectively as fetched from the database.</p>
        <div class="action-icons">
          <a href="blooddonated.php">
            <i class="fas fa-heartbeat"></i>
          </a>
          <a href="updateprof.php">
            <i class="fas fa-address-card"></i>
          </a>
          <a class="open-modal" data-toggle="modal" data-target="#logOut">
            <i class="fas fa-sign-out-alt"></i>
          </a>
          <a data-toggle="modal" data-target="#modalForm">
            <i class="fas fa-phone"></i>
          </a>
        </div>
      </div>
    </section>
      
<!-- Modal --> 
     <div id="logOut" class="modal fade"> 
      <div class="modal-dialog"> 
       <div class="modal-content"> 
        <div class="modal-header"> 
         <h5 class="modal-title">Confirmation</h5> 
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
            <span class="sr-only">Close</span>
         </button>
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
      
<!-- Contact Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Contact Admin</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>  
            <!-- Modal Body -->
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                <?php
                if(isset($_POST["submt"])) 
                {
                    $cn=makeconnection();			

                            $s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";

                    $q=mysqli_query($cn,$s);
                    mysqli_close($cn);
                    if($q>0)
                    {
                        echo '<p class="text-success text-center">Thanks for contacting us, we\'ll get back to you soon.</p>';
                    }
                    else
                        {
                            echo '<p class="text-danger text-center">Some problem occurred, please try again.</p>';
                        }
                 }	
                ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="t1" value="<?php echo @$name;?> <?php echo @$name2;?>" required="required">   
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="t2" value="<?php echo @$email; ?>" required="required">   
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="t3" value="<?php echo @$mobile; ?>">   
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Message:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="3" name="t4" required="required"></textarea>   
                    </div>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <button type="submit" name="submt" class="btn btn-success">Submit</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
        
  <!-- Bootstrap core JavaScript -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../lib/jquery-easing/jquery.easing.min.js"></script>


</body>

</html>
