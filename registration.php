<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#700000"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
  <title>Donor Registration</title>
    
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

      <li class="menu--item  menu--item__has_sub_menu menu--subitens__opened">

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
            <a href="#" class="sub_menu--link sub_menu--link__active">Register</a>
          </li>
        </ul>
      </li>
      <li class="menu--item">
        <a href="viewrequests.php" class="menu--link" title="View blood requests">
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
            <h1 class="title-single">Donor Registration</h1>              
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Donor Registration
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
      
<section>     
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card shadow mb-3">
			<div class="card-header">
				<h3 class="text-dark">Register</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fa fa-user-plus"></i></span>
				</div>
			</div>
			<div class="card-body pb-2">
				<form method="post" enctype="multipart/form-data">
                    <?php
                    if(isset($_POST["submt"])) 
                    {
                    $target_dir = "doner_pic/";
                    $target_file = $target_dir . basename($_FILES["t9"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    // Check if image file is a actual image or fake image

                        $check = getimagesize($_FILES["t9"]["tmp_name"]);
                        if($check !== false) {
                          //  echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }

                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }
                    //aloow certain file formats
                        if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
                            echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
                            $uploadok=0;
                        }else{
                            if(move_uploaded_file($_FILES["t9"]["tmp_name"], $target_file)){
                            $cn=makeconnection();
                                $s="insert into donarregistration(name,name2,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] . "','" . $_POST["t2"] ."','" . $_POST["r1"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] . "','" . $_POST["t7"] .  "','" . basename($_FILES["t9"]["name"])  ."')";

                                //$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
                        mysqli_query($cn,$s);
                        mysqli_close($cn);
                        if($s>0)
                        {
                            echo '<p class="text-success text-center">Registration succesfull.</p>';
                        }
                        else
                            {
                                 echo '<p class="text-success text-center">Registration succesfull.</p>';
                            }
                            } 
                        else{
                                echo '<p class="text-danger text-center">Sorry there was an error uploading your file, please try again.</p>';
                            }	

                        }
                    }
                    ?> 
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name :</label>
                        <div class="col-sm-9">
                             <input type="text" class="form-control" name="t1" required="required" pattern="[a-zA-Z _]{3,15}" title="A minimum of 3 and maximum of 15 characters" placeholder="First Name">   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Second Name :</label>
                        <div class="col-sm-9">
                             <input type="text" class="form-control" name="t2" required="required" pattern="[a-zA-Z _]{3,15}" title="A minimum of 3 and maximum of 15 characters" placeholder="First Name">   
                        </div>
                    </div>
                    <div class="form-group row"> 
                       <label class="control-label col-sm-3">Gender :</label> 
                       <div class="col-sm-4"> 
                        <label class="radio-inline"> 
                            <input type="radio" name="r1" value="male"> Male 
                        </label> 
                       </div>
                       <div class="col-sm-4"> 
                        <label class="radio-inline"> 
                            <input type="radio" name="r1" value="female"> Female 
                        </label> 
                       </div> 
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Age :</label>
                        <div class="col-sm-9">
                             <input type="text" class="form-control" name="t3" required="required" pattern="[0-9]{2,3}" placeholder="1 - 120">   
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Blood group :</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="t5">
                            <option value="">Not say</option>
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
                        <label class="col-sm-3 col-form-label">Phone Number :</label>
                        <div class="col-sm-9">
                             <input type="tel" class="form-control" name="t4" required="required" placeholder="Phone number">   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email :</label>
                        <div class="col-sm-9">
                             <input type="email" class="form-control" required="required" name="t6" placeholder="Email">   
                        </div>
                    </div>
                    <div class="form-group row"> 
                       <label class="col-sm-3 col-form-label" >Password :</label> 
                       <div class="col-sm-9"> 
                            <input type="password" class="form-control" name="t7" required="required" placeholder="Password"> 
                       </div> 
                    </div> 
                    <div class="form-group row"> 
                       <label class="col-sm-3 col-form-label" >Confirm Password:</label> 
                       <div class="col-sm-9">
                        <input type="password" class="form-control" name="t8" required="required" placeholder="Confirm Password"> 
                       </div> 
                    </div>
                    <div class="form-group row mb-0"> 
                       <label class="col-sm-3 col-form-label" >Upload Pic :</label>  
                       <div class="col-sm-9"> 
                           <div class="input-group form-group">
                              <div class="input-group input-file" name="t9">
                               <span class="input-group-btn">
                                   <button class="btn btn-default btn-choose" type="button">Choose</button> 
                               </span>
                               <input type="text" class="form-control" placeholder="profile picture..."/>
                                <span class="input-group-btn">
                                <button class="btn btn-info btn-reset" type="button">Reset</button>
                                </span>
                               </div> 
                            </div>
                     </div> 
                    </div>
                    
                    <hr class="my-2">
                
					<div class="form-group">
						<input type="submit" name="submt" value="Register" class="btn float-right login_btn">
					</div>
				</form>
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
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					Have an account? 
				</div>
				<div class="d-flex justify-content-center links">
					<a href="#"> Log In</a>
				</div>
			</div>
		</div>
	</div>
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
