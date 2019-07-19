<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="theme-color" content="#700000"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Update Profile</title>
    
  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/donor.css" rel="stylesheet">
    
  <!-- Bootstrap core JavaScript -->
  <script src="../lib/jquery/jquery.min.js"></script>

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
          <a class="nav-link active" href="home.php">About</a>
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
        <h4 class="mb-2">UPDATE PROFILE</h4>

        <div class="subheading mb-3">UPDATE &amp; MODIFY PROFILE FOR :
          <p><a href="index.php"><?php echo @$name;  ?>
          <span class="text-primary"><?php echo @$name2;  ?></span></a></p>
          </div>
          
          <hr class="my-4">
          
          <div class="container">
              <div class="row">
                <div class="col-sm-8 mx-auto">
                
                     <div class="jumbotron shadow-sm py-4">
                          <h5>Details</h5>
                          <hr class="my-3">
                         
                         <form class="form-horizontal" method="post" enctype="multipart/form-data">
                             
                             <div class="form-group row">
                                 <label for="inputEmail" class="col-sm-3 col-form-label" >Name 1:</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="t1" value="<?php echo @$name; ?>" required="required">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-sm-3 col-form-label" >Name 2:</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="t2" value="<?php echo @$name2; ?>" required="required">
                                 </div>
                             </div>
                             <div class="form-group row"> 
                               <label class="control-label col-sm-3">Gender :</label>
                                <div class="col-sm-4"> 
                                <label class="radio-inline"> 
                                <input type="radio" name="r1" value="male" <?php if($gender=='male'){ echo 'checked="checked"';}  ?> /> Male 
                                </label> 
                                </div>
                                <div class="col-sm-4"> 
                                <label class="radio-inline"> 
                                <input type="radio" name="r1" value="female" <?php if($gender=='female'){ echo 'checked="checked"'; } ?> /> Female 
                                </label> 
                                </div> 
                                
                            </div>
                             <div class="form-group row">
                                 <label class="col-sm-3 col-form-label" >Age:</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="t3" value="<?php echo @$age; ?>"> 
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-sm-3 col-form-label" >Mobile:</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="t4" value="<?php echo @$mobile; ?>">
                                 </div>
                             </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Blood group :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="t5">
                                    <option value="">Not Say</option>
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
                             <div class="form-group row">
                                 <label class="col-sm-3 col-form-label" >Email:</label>
                                 <div class="col-sm-9">
                                    <input type="email" class="form-control" name="t6" value="<?php echo @$email; ?>">
                                 </div>
                             </div>
                             <div class="form-group row mb-0"> 
                               <label class="col-sm-3 col-form-label" >Profile Pic :</label>  
                               <div class="col-sm-9"> 
                                   <div class="input-group form-group">
                                      <div class="input-group input-file" name="t7">
                                       <span class="input-group-btn">
                                           <button class="btn btn-info btn-choose" type="button">Choose</button> 
                                       </span>
                                       <input type="text" class="form-control" placeholder="profile picture..."/>
                                        <span class="input-group-btn">
                                        <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                       </div>
                                       <input type="hidden" class="form-control" name="h1" value="<?php echo @$pic; ?>">
                                    </div>
                             </div> 
                            </div>
                             <script>
                                function bs_input_file() {
                                $(".input-file").before(
                                    function() {
                                        if ( ! $(this).prev().hasClass('input-ghost') ) {
                                            var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                                            element.attr("name",$(this).attr("name"));
                                            element.change(function(){
                                                element.next(element).find('input').val((element.val()).split('\\').pop());
                                            });
                                            $(this).find("button.btn-choose").click(function(){
                                                element.click();
                                            });
                                            $(this).find("button.btn-reset").click(function(){
                                                element.val(null);
                                                $(this).parents(".input-file").find('input').val('');
                                            });
                                            $(this).find('input').css("cursor","pointer");
                                            $(this).find('input').mousedown(function() {
                                                $(this).parents('.input-file').prev().click();
                                                return false;
                                            });
                                            return element;
                                        }
                                    }
                                );
                            }
                            $(function() {
                                bs_input_file();
                            });
                            </script> 
                             
                <?php
                if(isset($_POST["sbmt"])) 
                {
                    $imagename=$_POST["h1"];
                if(file_exists($_FILES['t7']['tmp_name']) || is_uploaded_file($_FILES['t7']['tmp_name'])) 
                    {
                $target_dir = "../doner_pic/";
                $target_file = $target_dir . basename($_FILES["t7"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                // Check if image file is a actual image or fake image

                    $check = getimagesize($_FILES["t7"]["tmp_name"]);
                    if($check !== false) {
                      //  echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo '<p class="text-warning text-center">Sorry, file already exists.</p>';
                        $uploadOk = 0;
                    }

                // Check if file already exists
                if (file_exists($target_file)) {
                    echo '<p class="text-warning text-center">Sorry, file already exists.</p>';
                    $uploadOk = 0;
                }
                //aloow certain file formats
                    if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
                        echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
                        $uploadok=0;
                    }else{
                        if(move_uploaded_file($_FILES["t7"]["tmp_name"], $target_file)){
                $imagename=basename($_FILES["t7"]["name"]);
                        } else{
                            echo '<p class="text-danger text-center">Sorry there was an error uploading your file, please try again.</p>';
                        }	

                    }
                    }
                        $cn=makeconnection();

                if (empty($_FILES['t7']['name'])) {
                    $s="update donarregistration set name='" .$_POST["t1"]. "' ,name2='" .$_POST["t2"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t3"]. "',mobile='" .$_POST["t4"]. "',b_id='" .$_POST["t5"]. "',email='" .$_POST["t6"]. "',pic='" . $_POST["h1"] . "' where email='" .$_SESSION["email"]. "'";
                }
                else
                {
                    $s="update donarregistration set name='" .$_POST["t1"]. "' ,name2='" .$_POST["t2"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t3"]. "',mobile='" .$_POST["t4"]. "',b_id='" .$_POST["t5"]. "',email='" .$_POST["t6"]. "',pic='" . basename($_FILES["t7"]["name"])  ."' where email='" .$_SESSION["email"]. "'";
                }
                    $i=mysqli_query($cn,$s);
                    mysqli_close($cn);

                    echo '<p class="text-success text-center">Profile updated succesfull.</p>';

                }
                ?> 
                             <hr class="my-3">
                              <p class="lead">
                                <center><input type="submit" value="Update" name="sbmt" class="btn btn-primary"></center>
                              </p>
                          </form> 
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

  </div>
        
  <!-- Bootstrap core JavaScript -->
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../lib/jquery-easing/jquery.easing.min.js"></script>


</body>

</html>
