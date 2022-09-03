<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 require('db.php');

  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
    echo gettype($data['email']);
    $sql="select * from userprofile where email='".$data['email']."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
     {
        while($row = $result->fetch_assoc())
        {
            setcookie("usserid",$row['userID'],"/");
        }
     }
     else
     {
        $sql="Insert into userprofile(email,password) values ('".$data['email']."','".$data['email']."')";
        $conn->query($sql);
        $sql="select * from userprofile where email='".$data['email']."'";
        $result1 = $conn->query($sql);
        if ($result1->num_rows > 0)
        {
           while($row1 = $result->fetch_assoc())
           {
               setcookie("usserid",$row['userID'],"/");
           }
        }

     }
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
  header('location:/cdf/combined.php');
 }
}


// if(!isset($_SESSION['access_token']))
// {

//  $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Goog</a>';
// }

?>
<!-- <html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
  <div class="container">
   <br />
   <h2 style="align:center;">PHP Login using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html> -->
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="loginn/css/style.css">

	</head>
	<body>
	<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<!-- <div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div> -->
				  
		      	<h3 class="text-center mb-4"><i class="fa fa-lock" style="font-size:36px;color: gray;"></i> Join us with your google account</h3>
					<form action="index.php" class="login-form" method="post">
						<div class="form-group">
						<label> We never save your password </label>
							<!-- <input type="text" class="form-control rounded-left" placeholder="Username" name="email" required> -->
						</div>
						<div class="form-group d-flex">
						<label> Feel Secure and see our products</label>
							<!-- <input type="password" class="form-control rounded-left" placeholder="Password" name="password"required> -->
						</div>
						<div class="form-group d-md-flex">
							<div class="">
										<!-- <label class="checkbox-wrap checkbox-primary"><a href="/cdf/loginn/signup.php">Create Account</a> -->
										<!-- <input type="checkbox" checked> -->
										<!-- <span class="checkmark"></span> -->
										<!-- </label> -->
							</div>
							<div class="w-50 text-md-right">
									<!-- <a href="#">Forgot Password</a> -->
							</div>
						</div>
						<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
						<div class="form-group">
						
							
                     <?php
                     
                     if(!isset($_SESSION['access_token']))
                        {

                        $login_button = '<a href="'.$google_client->createAuthUrl().'"';
                        echo $login_button;
                        echo '  class="btn btn-primary rounded submit p-3 px-5">';
                        }
                      
                      ?>
                    
							<i style='font-size:20px;color: darkgray;' class='fab fa-google-plus-g'></i>
						
                      Sign in with Google</a>
						</div>
	          		</form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="loginn/js/jquery.min.js"></script>
  <script src="loginn/js/popper.js"></script>
  <script src="loginn/js/bootstrap.min.js"></script>
  <script src="loginn/js/main.js"></script>

	</body>
</html>