<?php
 require("../loginn/db.php");
 require("../loginn/myfile.php");

?>
<!DOCTYPE html>
<html lang="en">

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

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- Main CSS File -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- Main CSS File -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

<script>
	
	function rmprod(odno)
	{
		
		console.log("clicked");
		// alert("pkka");
		console.log(odno);
		document.getElementById("tb"+odno).innerHTML="";
		var xhttp = new XMLHttpRequest(); 
		xhttp.open("GET", "../precart.php?id="+odno, true);
		xhttp.send();
	}
	function updcrt()
	{
		// console.log(document.getElementsByClassName("orderno")[0].id);
		i=document.getElementsByClassName("orderno").length;
		// console.log(i);
		if(i>0)
		{
		while(i!=0)
		{
		i--;
		// console.log("1st "+document.getElementsByClassName("orderno")[i].id);
		// console.log("2nd "+document.getElementsByClassName("orderno")[i].value);
		tempid=document.getElementsByClassName("orderno")[i].id;
		tempval=document.getElementsByClassName("orderno")[i].value;
		if(tempval==0)
		rmprod(tempid)
		// console.log("tempid="+tempid)
		// console.log("tempval ="+tempval);
		var xhttp = new XMLHttpRequest(); 
		// t=tempval;
		// console.log("hu");
		// console.log(t);
		// console.log(10);
		xhttp.open("GET", "updcart.php?odid="+tempid+"&qty="+tempval, true);
		xhttp.send();
		}


		location.reload();
		}
		console.log("gap");
	}

</script>







<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	

	<!-- responsive header -->
	
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
	<!-- topbar -->
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
   <!-- End .page-wrapper -->	
	
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
            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Item</th>
                                            <th>Size</th>
											<th>Price</th>
											<th>Quantity</th>
											<!-- <th>Total</th> -->
											<th></th>
										</tr>
									</thead>

									<tbody>
										<?php
										if(isset($_SESSION['userid']))
										{
											$ud="u".$_SESSION['userid'];
										}
										else
										{
											session_start();
											$ud="u".$_SESSION['userid'];
										}
									
										// echo $ud;
										$sql = "SELECT  * FROM $ud  where orderStatus=1";
										$result = $conn->query($sql);
										if($result->num_rows>0)
										{
											while($row = $result->fetch_assoc())
											{  
										echo'<tr id="tb'.$row["orderNo"].'">
											<td class="product-col">
												<div class="product">
													<!-- <figure class=""> -->
														<a>';
														$sql = "SELECT  * FROM postshow where postID=".$row['orderPostID']."";
														$result1 = $conn->query($sql);
														{
															while($row1 = $result1->fetch_assoc())
															{ 															  
															echo'
															<img style="    width: 77px;height: 41.59px" src="../postimg/'.$row1["categoryID"].'/'.$row1["image1"].'" alt="Product image">';
															}
														}
														echo '</a>
													<!-- </figure> -->

													<!-- <h3 class="product-title"> -->
														<a href="../prod.php?id='.$row['orderPostID'].'">'.$row["title"].'</a>
													<!-- </h3> -->
                                                    <!-- End .product-title -->
												</div><!-- End .product -->
											</td>
                                            <td  >'.$row["size"].'</td>
											<td class="price-col">&#8377;'.$row["price"].'</td>
											<td class="quantity-col">
                                                <div class="cart-product-quantity">
												<input style="width: 51px;" class="orderno" id="'.$row["orderNo"].'" type="number" min="1" max="5" value="'.$row["orderQuantity"].'">

                                               <!-- <select>
                                                  
                                                    <option selected value="'.$row["orderQuantity"].'" class="orderno" id="'.$row["orderNo"].'">'.$row["orderQuantity"].'</option>
                                                    <option value="2">2</option>           
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                   
                                                </select>  -->
                                                    <!-- <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required> -->
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
											<!-- <td class="total-col">$84.00</td> -->
											<td class="remove-col"><button onclick="rmprod('.$row["orderNo"].')" class=""style="background: red;border-radius: 1.9rem;border: none;"><i class=""></i>X</button></td>
										</tr>';
											}
										}
                                       ?>
                                        
                                        

                                      
										
									</tbody>
								</table><!-- End .table table-wishlist -->

	                			<div class="cart-bottom">
			            			<div class="cart-discount">
			            				<!-- <form action="#"> -->
			            					<!-- <div class="input-group"> -->
				        						<!-- <input type="text" class="form-control" required placeholder="coupon code"> -->
				        						<!-- <div class="input-group-append"> -->
													<!-- <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button> -->
												<!-- </div>.End .input-group-append -->
			        						<!-- </div>End .input-group -->
			            				<!-- </form> -->
			            			</div><!-- End .cart-discount -->
								
			            			<a onclick="updcrt()" class="btn btn-outline-dark-2" style="background: #248eff3d;border-radius: 1rem;"><span>&nbsp;UPDATE CART&nbsp;</span><i class="fa fa-refresh">&nbsp;</i></a>
		            			</div><!-- End .cart-bottom -->
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
									
										<p>
	                						<tr class="summary-subtotal">
	                							<td>Item</td>
												<td>Price/</td>
												<td>Quantity</td>
	                							<td>Total</td>
	                						</tr>
											<?php
											$pl="u".$_SESSION['userid'];
											   $sql = "SELECT * FROM $pl where orderStatus=1";
											   $result = $conn->query($sql);
											   $amt=0;
											   $clcamt=0;
											   if($result->num_rows>0)
											     { 
											   while($row = $result->fetch_assoc())
												   {  
													   echo 
													   '<tr class="summary-subtotal">
													   <td>'.$row["title"].'</td>
													   <td>'.$row["price"].'</td>
													   <td>'.$row["orderQuantity"].'</td>
													   <td>';
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
										
										</p>
											<!-- End .summary-subtotal -->
	                						<!-- <tr class="summary-shipping">
	                							<td>Shipping:</td>
	                							<td>&nbsp;</td>
	                						</tr> -->

	                						<!-- <tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="free-shipping">Free Shipping</label>
													</div>
													End .custom-control
	                							</td>
	                							<td>$0.00</td>
	                						</tr>
											End .summary-shipping-row -->

	                						<!-- <tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="standart-shipping">Standart:</label>
													</div>
													End .custom-control
	                							</td>
	                							<td>$10.00</td>
	                						</tr>
											End .summary-shipping-row -->

	                						<!-- <tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="express-shipping">Express:</label>
													</div>
													End .custom-control
	                							</td>
	                							<td>$20.00</td>
	                						</tr>
											End .summary-shipping-row -->

	                						<!-- <tr class="summary-shipping-estimate">
	                							<td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
	                							<td>&nbsp;</td>
	                						</tr> -->
											<!-- End .summary-shipping-estimate -->

	                						<tr class="summary-total">
												<td></td>
												<td></td>
	                							<td>Total:</td>
	                							<td>&#8377;<?php echo $clcamt ?></td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="checkout.php" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                		  		</div>
									  <!-- End .summary -->
		            				<a href="../combined.php" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		
							</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
                </div><!-- End .page-content -->
                </main><!-- End .main -->

       
            </div><!-- End .page-wrapper -->



	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../js/main.min.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

   


    
</body>	

</html>