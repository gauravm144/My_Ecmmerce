<?php
// define variables and set to empty values
require ("db.php");
require("ses_start.php");
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$password =$_POST["password"];

	// $pass_boll=true;
	if($password!=$_POST["cpassword"])
	{
		// $pass_boll=false;
		echo '<div class="alert alert-danger" role="alert">
		Password donot match
	</div>';

	}
	else
	{
		$sql = "SELECT email FROM userprofile where email='$email'";
		$result = $conn->query($sql);
		// echo $result->num_rows;
		// echo $username;
		if($result->num_rows>0)
		{
			echo '<div class="alert alert-danger" role="alert">
			Account already exist ! lol
			</div>';
		}
		// INSERT INTO userprofile (`email`,`password`,`name`,`phone`,`timeaccount`)VALUES(,,,);

		else
		{
		// $sql="Insert into users values('$email','$password')";
		
		$sql="INSERT INTO userprofile (email,password,name,timeaccount) VALUES ('$email','$password','$name',current_timestamp());";
		 $conn->query($sql);
				
		
		  
		

		$sql = "SELECT userID,name FROM userprofile where email='$email'";
		$result = $conn->query($sql);
		session_start();
		$_SESSION['username'] = $email;
		$tempfortab="";
		while($row=$result->fetch_assoc())
		{
				$_SESSION['userid']=$row["userID"];
				if(isset($_COOKIE['usserid']))
				{
				$_COOKIE['usserid']=$row["userID"];
				}
				else
				{
				setcookie("usserid",$row["userID"],time()+60*60*24*24,"/");
				}

				$_SESSION['usern']=$row["name"];
				$tempfortab="u".$_SESSION['userid'];
		}
		$sql="CREATE TABLE $tempfortab (
			orderNo INT NOT NULL AUTO_INCREMENT,
			orderPostID INT NULL,
			orderQuantity INT NULL,
			orderStatus INT NULL,
			orderTime TIMESTAMP NULL DEFAULT current_timestamp,
			size VARCHAR(10) NULL,
			title VARCHAR(45) NULL,
			price FLOAT NULL,
			orderednum INT NULL DEFAULT 0,
			PRIMARY KEY (orderNo),
			  FOREIGN KEY (orderPostID)
			  REFERENCES postshow (postID)
			  ON DELETE NO ACTION
			  ON UPDATE NO ACTION,
			  FOREIGN KEY (orderStatus)
			  REFERENCES orderstatus (statID)
			  ON DELETE NO ACTION
			  ON UPDATE NO ACTION)";
		$conn->query($sql);
		// echo $result;
		// echo '<div class="alert alert-success" role="alert">
		// 	Account created successfully , Wait we are redirecting
		// 	</div>';
			
			// sleep(3);
			
			// setcookie('username',$email,time()+60*60*24);

			header("location:/cdf/combined.php");
		}
	}
}
// echo $name."<br>".$email."<br>".$password;
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sign up</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<!-- <div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div> -->
		      	<h3 class="text-center mb-4">New Account</h3>
					<form action="signup.php" class="login-form" method="POST">
						<div class="form-group">
							<input type="email" class="form-control rounded-left" placeholder="Email" name="email" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control rounded-left" placeholder="Full Name" name="name"required>
						</div>
						<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" placeholder="Password" name="password"required>
						</div>
						<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" placeholder="Confirm Password" name="cpassword"required>
						</div>
						<div class="form-group d-flex">
							<input type="text" class="form-control rounded-left" placeholder="Security answer to reset password" name="secques"required>
						</div>
						<div class="form-group d-md-flex">
							<div class="w-50">
										<label class="checkbox-wrap checkbox-primary"><p>Already a member?<br><a href="/cdf/loginn/index.php">Login</a></p>
										<!-- <input type="checkbox" checked> -->
										<span class="checkmark"></span>
										</label>
							</div>
							<!-- <div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
							</div> -->
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
						</div>
	          		</form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

