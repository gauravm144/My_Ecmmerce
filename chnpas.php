<?php
require("./loginn/db.php");
require("./loginn/myfile.php");
include ("gauravupper.php");
?>

<?php
if($_POST['oldsec']&&$_POST['newsec'])
{
    $sql = "SELECT * FROM userprofile where userID=".$_COOKIE['usserid']."";
    $result = $conn->query($sql);
    if($result->num_rows==1)
	{
		
		while($row=$result->fetch_assoc())
		{
           if($row[''])
        }
    }
    echo $_POST['oldsec'];
    echo "<br>";
    echo $_POST['newsec'];
}
?>
                                <div class="col-lg-12">
									<div class="central-meta">
										<div class="editing-info">
											<h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>
											
											<form method="post">
												<div class="form-group">	
												  <input type="password" id="input" required="required"/>
												  <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
												  <input type="password" required="required"/>
												  <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
												  <input type="password" required="required"/>
												  <label class="control-label" for="input">Current password</label><i class="mtrl-select"></i>
												</div>
												<a class="forgot-pwd underline" title="" href="#">Forgot Password?</a>
												<div class="submit-btns">
													<button type="button" class="mtr-btn"><span>Cancel</span></button>
													<button type="button" class="mtr-btn"><span>Update</span></button>
												</div>
											</form>
										</div>
									</div>	
								</div>
                                
                                <div class="col-lg-12">
									<div class="central-meta">
										<div class="editing-info">
											<h5 class="f-title"><i class="ti-lock"></i>Change Name</h5>
											
											<form method="post">
												<div class="form-group">	
												  <input type="password" id="input" required="required"/>
												  <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
												</div>
												<!-- <a class="forgot-pwd underline" title="" href="#">Forgot Password?</a> -->
												<div class="submit-btns">
													<button type="button" class="mtr-btn"><span>Cancel</span></button>
													<button type="button" class="mtr-btn"><span>Update</span></button>
												</div>
											</form>
										</div>
									</div>	
								</div>
                                <div class="col-lg-12">
									<div class="central-meta">
										<div class="editing-info">
											<h5 class="f-title"><i class="ti-lock"></i>Change Security Answer</h5>
											
											<form method="post" action="?">
												<div class="form-group">	
												  <input name="oldsec" type="text" id="input" required="required"/>
												  <label class="control-label" for="input">Old Security Answer</label><i class="mtrl-select"></i>
												</div>
                                                <div class="form-group">	
												  <input name="newsec" type="text" id="input" required="required"/>
												  <label class="control-label" for="input">New Security Answer</label><i class="mtrl-select"></i>
												</div>
												<!-- <a class="forgot-pwd underline" title="" href="#">Forgot Password?</a> -->
												<div class="submit-btns">
													<!-- <button type="button" class="mtr-btn"><span>Cancel</span></button> -->
													<button type="submit" class="mtr-btn"><span>Update</span></button>
												</div>
											</form>
										</div>
									</div>	
								</div>

<?php
include ("gauravlower.php");
?>