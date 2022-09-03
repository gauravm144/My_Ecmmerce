<?php
 require("../loginn/db.php");
 require("../loginn/myfile.php");
 setcookie("currencyuser",$_SESSION['userid'],time() + (60*6), "/");
?>
<script>
function bb()
{
	console.log("ji");
}
</script>

<!DOCTYPE html>
<html lang="en">


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="../images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Plugins CSS File -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- Main CSS File -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>

<body>

<div class="theme-layout">
	
<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="../images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<!-- <a class="fa fa-sliders" href="#shoppingbag"></a> -->
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
			<ul>
				<li><a href="combined.php" title="">Home</a></li>
				<li><span>Women</span>

					<ul>

						<li><a href="../category.php?category=top" title="">Top</a></li>
						<li><a href="../category.php?category=womenjeans" title="">Jeans</a></li>
						<li><a href="../category.php?category=womendenim" title="">Denim</a></li>
						<li><a href="../category.php?category=nightie" title="">Nightie</a></li>
						<li><a href="../category.php?category=bodyfit" title="">Bodyfit</a></li>
						<li><a href="../category.php?category=sportsbra" title="">SportsBra</a></li>
						<li><a href="../category.php?category=womenwestern" title="">Western</a></li>
						<li><a href="../category.php?category=lingerie" title="">Lingerie</a></li>
						<li><a href="../category.php?category=womenshirt" title="">Shirt</a></li>
						
					</ul>
				</li>

				<li><span>Men</span>

					<ul>
						
						<li><a href="../category.php?category=menshirt">Shirt</a></li>
						<li><a href="../category.php?category=tshirt">TShirt</a></li>
						<li><a href="../category.php?category=menjeans">Jeans</a></li>
						<li><a href="../category.php?category=menwestern">Western</a></li>
						<li><a href="../category.php?category=gymup">Gym Upper</a></li>
						<li><a href="../category.php?category=gymlow">Gym Lower</a></li>
						<li><a href="../category.php?category=shorts">Shorts</a></li>
						
					</ul>
					
				</li>

			<li><span>Contact us</span>
			<ul>
			<li><a href="../personal.html" title="">Personal</a></li>
			<li><a href="../business.html" title="">Business</a></li>
			</ul>
			</li>

			<li><a href="../aboutus.html" title="">About us</a></li>
			<li><a href="../eshopper/cart1.php" title="Your Cart" data-ripple=""  >cart  Items <i class="fa fa-shopping-cart"style="font-weight:bold"></i><span id="incdeccount"></span></a>
			</li>
			</ul>
		</nav>
		<!-- responsive van but -->
		<!-- <nav id="shoppingbag">
			<div>
				<div class="">
					<form method="post">
						<div class="setting-row">
							<span>use night mode</span>
							<input type="checkbox" id="nightmode"/> 
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notifications</span>
							<input type="checkbox" id="switch2"/> 
							<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notification sound</span>
							<input type="checkbox" id="switch3"/> 
							<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>My profile</span>
							<input type="checkbox" id="switch4"/> 
							<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show profile</span>
							<input type="checkbox" id="switch5"/> 
							<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					<h4 class="panel-title">Account Setting</h4>
					<form method="post">
						<div class="setting-row">
							<span>Sub users</span>
							<input type="checkbox" id="switch6" /> 
							<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>personal account</span>
							<input type="checkbox" id="switch7" /> 
							<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Business account</span>
							<input type="checkbox" id="switch8" /> 
							<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show me online</span>
							<input type="checkbox" id="switch9" /> 
							<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Delete history</span>
							<input type="checkbox" id="switch10" /> 
							<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Expose author name</span>
							<input type="checkbox" id="switch11" /> 
							<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
				</div>
			</div>
		</nav> -->
</div>

<div class="topbar stick">
		<div class="logo">
			<a title="" href="newsfeed.html"><img src="../images/logo.png" alt=""></a>
		</div>
		
		<div class="top-area">
			<ul class="main-menu">
				<li>
					<a title="">Women</a>
					<ul>
						<li><a href="../category.php?category=top" title="">Top</a></li>
						<li><a href="../category.php?category=womenjeans" title="">Jeans</a></li>
						<li><a href="../category.php?category=womendenim" title="">Denim</a></li>
						<li><a href="../category.php?category=nightie" title="">Nightie</a></li>
						<li><a href="../category.php?category=bodyfit" title="">Bodyfit</a></li>
						<li><a href="../category.php?category=sportsbra" title="">SportsBra</a></li>
						<li><a href="../category.php?category=womenwestern" title="">Western</a></li>
						<li><a href="../category.php?category=lingerie" title="">Lingerie</a></li>
						<li><a href="../category.php?category=womenshirt" title="">Shirt</a></li>

					</ul>
				</li>
				<li>
					<a  title="">Men</a>
					<ul>
						<li><a href="../category.php?category=menshirt">Shirt</a></li>
						<li><a href="../category.php?category=tshirt">TShirt</a></li>
						<li><a href="../category.php?category=menjeans">Jeans</a></li>
						<li><a href="../category.php?category=menwestern">Western</a></li>
						<li><a href="../category.php?category=gymup">Gym Upper</a></li>
						<li><a href="../category.php?category=gymlow">Gym Lower</a></li>
						<li><a href="../category.php?category=shorts">Shorts</a></li>



					</ul>
				</li>
				<li>
					<a  title="">Contact us</a>
					<ul>
						<li><a href="personal.html" title="">Personal</a></li>
						<li><a href="business.html" title="">Business</a></li>
						<!-- <li><a href="contact.html" title="">contact</a></li> -->
						<!-- <li><a href="faq.html" title="">faq s page</a></li> -->
						<!-- <li><a href="insights.html" title="">insights</a></li> -->
						<!-- <li><a href="knowledge-base.html" title="">knowledge base</a></li> -->
						<!-- <li><a href="widgets.html" title="">Widgts</a></li> -->
					</ul>
				</li>
				<li>
					<a href="aboutus.html" title="">About Us</a>
					<ul>
						<li><a href="aboutus.html" title="">About us</a></li>
						<!-- <li><a href="edit-account-setting.html" title="">edit account setting</a></li> -->
						<!-- <li><a href="edit-interest.html" title="">edit-interest</a></li> -->
						<!-- <li><a href="edit-password.html" title="">edit-password</a></li> -->
						<!-- <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li> -->
						<!-- <li><a href="edit-work-eductation.html" title="">edit work educations</a></li> -->
						<!-- <li><a href="messages.html" title="">message box</a></li> -->
						<!-- <li><a href="inbox.html" title="">Inbox</a></li> -->
						<!-- <li><a href="notifications.html" title="">notifications page</a></li> -->
					</ul>
				</li>
			
			</ul>
			<ul class="setting-area">
				<li>
					<a href="#" title="Home" data-ripple="">
						<!-- <i class="ti-search"></i></a> -->
					<div class="searched">
						<!-- <form method="post" class="form-search"> -->
							<!-- <input type="text" placeholder="Search Friend"> -->
							<!-- <button data-ripple><i class="ti-search"></i></button> -->
						<!-- </form> -->
					</div>
				</li>
				<li><a href="newsfeed.html" title="Home" data-ripple="">
					<!-- <i class="ti-home"></i> -->
				</a></li>
			
				
			</ul>
			<div class="user-img">
				<!-- <img src="images/resources/admin.jpg" alt=""> -->
				<!-- <span class="status f-online"></span> -->
				
			</div>
			<!-- <span class="ti-menu main-menu" data-ripple=""></span> -->
		</div>
</div>	
	


    <div class="page-wrapper">
       

       <main class="main">
           <!-- <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')"> -->
               <!-- <div class="container"> -->
                   <!-- <h1 class="page-title">Shopping Cart<span>Shop</span></h1> -->
               <!-- </div>End .container -->
           <!-- </div>End .page-header -->
           <!-- <nav aria-label="breadcrumb" class="breadcrumb-nav">
               <div class="container">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                       <li class="breadcrumb-item"><a href="#">Shop</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                   </ol>
               </div> End .container -->
           <!-- </nav>End .breadcrumb-nav -->

          

      
   </div><!-- End .page-wrapper -->	
	
   <div class="page-wrapper">
       

        <main class="main">
        	<!-- <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')"> -->
        		<!-- <div class="container"> -->
        			<!-- <h1 class="page-title">Shopping Cart<span>Shop</span></h1> -->
        		<!-- </div>End .container -->
        	<!-- </div>End .page-header -->
            <!-- <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div> End .container -->
            <!-- </nav>End .breadcrumb-nav -->

           
	
</div>

<div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                       

                    </div><!-- End .header-left -->

                  
                </div><!-- End .container -->
            </div><!-- End .header-top -->

        </header><!-- End .header -->

        <main class="main">
        	<!-- <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')"> -->
        		<!-- <div class="container"> -->
        			<!-- <h1 class="page-title">Checkout<span>Shop</span></h1> -->
        		<!-- </div>End .container -->
        	<!-- </div>End .page-header -->
            <!-- <nav aria-label="breadcrumb" class="breadcrumb-nav"> -->
                <!-- <div class="container"> -->
                    <!-- <ol class="breadcrumb"> -->
                        <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
                        <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                        <!-- <li class="breadcrumb-item active" aria-current="page">Checkout</li> -->
                    <!-- </ol> -->
                <!-- </div>End .container -->
            <!-- </nav>End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<!-- <div class="checkout-discount"> -->
            				<!-- <form action="#"> -->
        						<!-- <input type="text" class="form-control" required id="checkout-discount-input"> -->
            					<!-- <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label> -->
            				<!-- </form> -->
            			<!-- </div>End .checkout-discount -->
            			<form action="checkout.php" method="POST">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name *</label>
		                						<input name="firstname" value=""  type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name *</label>
		                						<input name="lastname" value="" type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<!-- <label>Company Name (Optional)</label> -->
	            						<!-- <input type="text" class="form-control"> -->

	            						<label>Country *</label>
	            						<input name="country" type="text" class="form-control" required>

	            						<label>Street address *</label>
	            						<input name="address" type="text" class="form-control" placeholder="House number and Street name" required>
	            						<!-- <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." required> -->

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>City *</label>
		                						<input name="city" type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State *</label>
		                						<input name="state" type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode *</label>
		                						<input name="pin" type="number" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input name="phone" type="tel" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Email address *</label>
	        							<input name="mail" type="email" class="form-control" required>

	        							<!-- <div class="custom-control custom-checkbox"> -->
											<!-- <input type="checkbox" class="custom-control-input" id="checkout-create-acc"> -->
											<!-- <label class="custom-control-label" for="checkout-create-acc">Create an account?</label> -->
										<!-- </div>End .custom-checkbox -->

										<!-- <div class="custom-control custom-checkbox"> -->
											<!-- <input type="checkbox" class="custom-control-input" id="checkout-diff-address"> -->
											<!-- <label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label> -->
										<!-- </div>End .custom-checkbox -->

	                					<!-- <label>Order notes (optional)</label> -->
	        							<!-- <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea> -->
		                		</div>
								<!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Item</th>
													<th>Price/</th>
													<th>Quantity</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
												<?php
													$pl="u".$_SESSION['userid'];
													$sql = "SELECT * FROM $pl where orderStatus=1";
													$result = $conn->query($sql);
													$clcamt=0;
													if($result->num_rows>0)
													{ 
												  while($row = $result->fetch_assoc())
													  {  echo '<tr class="summary-subtotal">
														<td>'.$row["title"].'</td>
														<td>'.$row["price"].'</td>
														<td>'.$row["orderQuantity"].'</td>
														<td>&#8377;';
														  $amt=$row["price"]*$row["orderQuantity"];
														  $clcamt+=$amt;
														  echo $amt;  
														echo'</td>												
														  </tr>';
													  }
													}
													else
													{
														echo "Empty cart";
													}
												?>
		                					
		                						<tr class="summary-subtotal">
													<td></td>
													<td></td>
		                							<td>Subtotal:</td>
													<?php
													echo '<td>&#8377;'.$clcamt.'</td>';
													?>
		                							
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
													<td></td>
													<td></td>
		                							<td>Shipping:</td>
		                							<td>Free shipping</td>
		                						</tr>
		                						<tr class="summary-total">
													<td></td>
													<td></td>
		                							<td>Total:</td>
		                							<?php
													echo '<td>&#8377;'.$clcamt.'</td>';
													?>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->
										<a href="checkout.php" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                		  		</div>
									  <!-- End .summary -->
		            				<a href="../combined.php" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		
		                				
										<!-- End .accordion -->

		                				<!-- <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button> -->
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
								<div class="accordion-summary" id="accordion-payment">
								
								<p>Please confirm above details method:</p>
  								<input type="checkbox" id="" name="det" value="1" required>
  								<label for="male">Confirmed</label><br>  
								
								<p>Please select your payment method:</p>
  								<input type="radio" id="male" name="ans" value="1" required>
  								<label for="male">Online Payment Paytm / Debit/Credit card / upi/ netbanking</label><br>  
								<input type="radio" id="male" name="ans" value="2">
  								<label for="male">Cash On Delivery</label><br>  
																																				    <div class="card">
										      
										    </div><!-- End .card -->
											<!-- End .accordion -->

		                					<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                	</div><!-- End .row -->
            			</form>
						<?php
				
						if($_SERVER['REQUEST_METHOD']=='POST')
						{
							function addres()
							{ require("../loginn/db.php");
								// $sql = "select * from u".$_SESSION['userid']." where orderStatus=1";
								// $rr= $conn->query($sql);

								// echo "haha->".mysqli_num_rows($rr)."haha";



								// $sql = "Insert into userordertable (userID,Firstname,Lastname,country,address,city,state,pincode,phone,email) values 
								// (".$_SESSION['userid'].",'".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['country']."','".$_POST['address']."',
								// '".$_POST['city']."','".$_POST['state']."','".$_POST['pin']."','".$_POST['phone']."','".$_POST['mail']."')";
								// echo "<br>";
								// echo $_POST['firstname'];
								// echo "<br>";
								// echo $_POST['lastname'];
								// echo "<br>";
								// echo $_POST['phone'];
								// echo "<br>";
								// echo $_POST[''];
								// echo "<br>";
								$sql = "Insert into userordertable (userID , Firstname,Lastname,country,address,city,state,pincode,phone,email) values
								 (".$_SESSION['userid'].",'".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['country']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['pin']."','".$_POST['phone']."','".$_POST['mail']."')";			
								$conn->query($sql);
								// echo "done";
								
							}
						$a=$_POST['ans'];
						
						// if($_POST['det'])
						// {
						// 	addres();
						// }
						echo "det".$_POST['ans'];


						if($a==1)
						{
							addres();
						

							require("../Paytm/PaytmKit/TxnTest.php");
							echo '<script type="text/javascript">gohead('.$clcamt.','.$tmpsid.')</script>';

						}
						else if($a==2)
						{
							addres();
							require("../loginn/db.php");
							echo $_COOKIE['usserid'];
							$sql="SELECT orderNo FROM userordertable WHERE userID =".$_COOKIE['usserid']." ORDER BY orderNo DESC Limit 1";
							$result = $conn->query($sql);
							$clcamt=0;
							if($result->num_rows>0)
							{ 
						  while($row = $result->fetch_assoc())
							  {
								  echo "row->".$row['orderNo']."<-row";

								  $sql = "SELECT * FROM u".$_COOKIE['usserid']." where orderStatus=1";
								  $result1 = $conn->query($sql);
								  $clcamt=0;
								  $amt=0;
								  echo "result1->".mysqli_num_rows($result1)."<-jj";
								  if($result1->num_rows>0)
								  { 
								while($row1 = $result1->fetch_assoc())
									{ 
										$amt=$row1["price"]*$row1["orderQuantity"];
										$clcamt+=$amt;
									}
									echo "amount".$clcamt."aa";
								  }
								  $sql = "update userordertable set totalItems=".mysqli_num_rows($result1)." ,cost=".$clcamt.", cod=1 , status=3 where orderNo=".$row['orderNo']."";
								 $conn->query($sql);
								 $sql = " update u".$_COOKIE['usserid']." set orderStatus=3 ,orderednum=".$row['orderNo']." where orderStatus=1";
								 $conn->query($sql);
								 
								 $sql = " select orderQuantity,orderPostID from u".$_COOKIE['usserid']."  where orderednum=".$row['orderNo']."";
								 $result2= $conn->query($sql);
								 if($result2->num_rows>0)
								 { 
							      while($row2 = $result2->fetch_assoc())
								   {
									$sql = " select quantity from postshow where postID=".$row2['orderPostID']."";
									$result3= $conn->query($sql);
									if($result3->num_rows>0)
									{ 
									 while($row4 = $result3->fetch_assoc())
									  {
										$qty=abs($row4['quantity']-$row2['orderQuantity']);
										$sql = " update postshow set quantity=".$qty." where postID=".$row2['orderPostID']."";
									    $conn->query($sql);
										$qty=0;
									  }
									}


								   }
								 }



								 echo "<script>window.location.replace('../orders.php');</script>";

								//   $sql="update userordertable set ";
								//   $result1 = $conn->query($sql);
							  }
							}
							// echo "<script>window.location.replace('');</script>";
						
						}
						// require("../Paytm/PaytmKit/TxnTest.php");
						// echo $clcamt;
						$tmpsid=$_SESSION['userid'];
						echo "vala".$a;
						
						// echo '<script type="text/javascript">gohead('.$clcamt.','.$tmpsid.')</script>';
						}
?>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
<?php

?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    

    <!-- Sign in / Register Modal -->
    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../js/main.min.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

 
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>