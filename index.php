<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#700000"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
  <title>Maisha</title>
    
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
        <a href="index.php" class="menu--link link__active" title="Home">
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
        <div class="flexible col-md-6 col-lg-6">
          <div class="title-single-box">
            <h1 class="title-single">What Is Maisha?</h1>
            <span class="color-text-a">Maisha is a Swahili word for life. In essence, blood is life and without blood one cannot be alive. This is in line with the sole purpose of the Maisha system to enable people to access blood donation easily.</span>
          </div>
        </div>
        <div class="flexible col-md-6 col-lg-6">
          <div class="title-single-box">
            <h1 class="title-single">For The Future</h1>
            <span class="color-text-a">Maisha system is aimed at targeting those people in Emergencies and in need of urgent blood transfusion. With the continuous advancement in technology and digitalization of service delivery, Maisha is future proof.</span>
          </div>
        </div>
      </div>
            <hr class="my-4">
    </div>
  </section>
      
  <section>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Share a heart</h1>
        </div>    
        <div class="card w-100 shadow-sm mb-3">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-dark">Quick Actions</h6>
            </div>
            <div class="card-body">
             
                <div class="row">
                    <div class="col-lg-8 text-center text-lg-left">
                        <p class="card-text">Nothing is more compassionate than giving someone a chance to live. By donating blood someone somewhere is given a second chance to life.</p>
                        </div>
                    <div class="text-center col-lg-4">

                        <a href="donor/index.php" class="cta-btn align-middle my-2"><i class="fa fa-lg fa-tint"></i> Donate blood</a>
                        <a href="requests.php" class="cta-btn align-middle my-2"><i class="fa fa-lg fa-heartbeat fa-spin"></i> Request blood</a>   
                    </div>
                </div> 
            </div>
        </div>
      </div>
</section> 
     
<section>
    <div class="container">
      <div class="row mb-2">
       
        <div class="col-md-4 flexible">
          <div class="card bg-transparent w-100 shadow mb-2">
            <img class="card-img-top" src="img/exam.png" alt-="Examination"> 
            <div class="card-body">
              <h4 class="card-title text-dark">What is done</h4>
              <p class="card-text">
                A mini health exam that includes a checklist for diseases related to blood pressure and infectious diseases should be conducted before initiating the collection of blood. Those who have medical conditions such as AIDS and hepatitis should not donate blood. People who have taken vaccinations or have undergone any surgery or have cancer, diabetes, cold, and flu should consult health experts before donating blood. Pregnant women should seek expert advice before donating blood. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 flexible">
          <div class="card bg-transparent w-100 shadow mb-2">
            <img class="card-img-top" src="img/don.png" alt="">
            <div class="card-body">
              <h4 class="card-title text-dark">What is done</h4>
              <p class="card-text">
                Donating blood can help in treating patients suffering from cancer, bleeding disorders, chronic anemia associated with cancer, sickle cell anemia, and other hereditary blood abnormalities. It is important to know that human blood cannot be manufactured, people are the only source of it and that is why it is important to donate blood and help those who need it. It is also possible to store your own blood for your future needs. Make sure the blood is stored at a good blood bank. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 flexible">
           <div class="card bg-transparent w-100 shadow mb-2">
            <img class="card-img-top" src="img/fact.png" alt="">
            <div class="card-body">
              <h4 class="card-title text-dark">What is done</h4>
              <p class="card-text">
                
                  Intake of iron-rich diet may increase the iron levels in the body, and since only limited proportions can be absorbed, excess iron gets stored in heart, liver, and pancreas. This, in turn, increases the risk of cirrhosis, liver failure, damage to the pancreas, and heart abnormalities like irregular heart rhythms. Blood donation helps in maintaining the iron levels and reduces the risk of various health ailments.
                </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
      

<!-- Modal --> 
<div id="search" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true"> 
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