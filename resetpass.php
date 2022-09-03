<?php
// define variables and set to empty values
require ("loginn/db.php");
// require("loginn/ses_start.php");
$email = $sec = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$email = test_input($_POST["email"]);
	// $password =$_POST["password"];

	$sql = "SELECT * FROM userprofile where email='$email' ";
	$result = $conn->query($sql);
	// $pass_boll=true;
	if($result->num_rows==1)
	{
		// $pass_boll=false;
		while($row=$result->fetch_assoc())
		{	
			// echo $row["password"];
			if($row["secques"]==$_POST['secq'])
			{
                if($_POST['pas']==$_POST['cpas'])
                {
                    $sql="update userprofile set password='".$_POST['pas']."' where email='".$email."'";
                    $conn->query($sql);
                    echo '<div class="alert alert-success" role="alert">
                        Password update 
                         </div>';  
                }
                else
                {
                    echo '<div class="alert alert-danger" role="alert">
				        Password donot match
			         </div>';
                }
				// echo '<div class="alert alert-success" role="alert">
				// done
			    //      </div>';
               
               
            
			// header("location:/cdf/combined.php");

			}
			else
			{
				echo '<div class="alert alert-danger" role="alert">
				invalid security answer
			</div>';

			}
		}


	}
	else
	{
		// $sql = "SELECT username FROM users where username='1' ";
		// $result = $conn->query($sql);
		// echo $result->num_rows;
		// if($result->num_rows>0)
		// {
			echo '<div class="alert alert-warning" role="alert">
			Account does not exixt ! Please Join us by creating your account
			</div>';
		// }
		// else
		// {
		// $sql="Insert into users values('$email','$password')";
		// $result = $conn->query($sql);
		// echo '<div class="alert alert-success" role="alert">
		// 	Account created successfully
		// 	</div>';
			// session_start();
			// $_SESSION['username'] = $username;
			// header("location:myfile.php");
		// }
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
	
	<link rel="stylesheet" href="/loginn/css/style.css">

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
		      	<h3 class="text-center mb-4">Fill the credentials</h3>
					<form action="resetpass.php" class="login-form" method="post">
						<div class="form-group">
							<input type="text" class="form-control rounded-left" placeholder="Username" name="email" required>
						</div>
						<div class="form-group d-flex">
							<input type="text" class="form-control rounded-left" placeholder="security ans" name="secq"required>
						</div>
                        <div class="form-group d-flex">
							<input type="text" class="form-control rounded-left" placeholder="new password" name="pas"required>
						</div>
                        <div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" placeholder="conform password" name="cpas"required>
						</div>
						<div class="form-group d-md-flex">
							<div class="">
										<label class="checkbox-wrap checkbox-primary"><a href="/cdf/signup.php">Create Account</a>
										<!-- <input type="checkbox" checked> -->
										<span class="checkmark"></span>
										</label>
							</div>
							<div class="w-50 text-md-right">
									<a href="/cdf/login.php">Login</a>
							</div>
                            
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

	<script src="/loginn/js/jquery.min.js"></script>
  <script src="/loginn/js/popper.js"></script>
  <script src="/loginn/js/bootstrap.min.js"></script>
  <script src="/loginn/js/main.js"></script>

	</body>
</html>

