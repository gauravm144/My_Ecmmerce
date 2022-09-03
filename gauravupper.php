<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

<script>
	console.log("hoi");
    
	if(localStorage.getItem("cart")==null)
	{
		var cart={};
		console.log("empty");
	}
	else
	{
		cart=JSON.parse(localStorage.getItem("cart"));
	}
 $(document).ready(function(){
$(".cart").click(function()
{
// console.log("clicked");
var idstr=this.id.toString();
// console.log(idstr);
if(cart[idstr]!=undefined)
{
	cart[idstr]+=1;
}
else
{
	cart[idstr]=1;
}
console.log(cart);
localStorage.setItem("cart",JSON.stringify(cart));

});
 });
</script>







<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="mh-head first Sticky ">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="images/logo2.png" alt=""></a>
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

						<li><a href="category.php?category=top" title="">Top</a></li>
						<li><a href="category.php?category=womenjeans" title="">Jeans</a></li>
						<li><a href="category.php?category=womendenim" title="">Denim</a></li>
						<li><a href="category.php?category=nightie" title="">Nightie</a></li>
						<li><a href="category.php?category=bodyfit" title="">Bodyfit</a></li>
						<li><a href="category.php?category=sportsbra" title="">SportsBra</a></li>
						<li><a href="category.php?category=womenwestern" title="">Western</a></li>
						<li><a href="category.php?category=lingerie" title="">Lingerie</a></li>
						<li><a href="category.php?category=womenshirt" title="">Shirt</a></li>
						
					</ul>
				</li>

				<li><span>Men</span>

					<ul>
						
						<li><a href="category.php?category=menshirt">Shirt</a></li>
						<li><a href="category.php?category=tshirt">TShirt</a></li>
						<li><a href="category.php?category=menjeans">Jeans</a></li>
						<li><a href="category.php?category=menwestern">Western</a></li>
						<li><a href="category.php?category=gymup">Gym Upper</a></li>
						<li><a href="category.php?category=gymlow">Gym Lower</a></li>
						<li><a href="category.php?category=shorts">Shorts</a></li>
						
					</ul>
					
				</li>

			<li><span>Contact us</span>
			<ul>
			<li><a href="personal.html" title="">Personal</a></li>
			<li><a href="business.html" title="">Business</a></li>
			</ul>
			</li>

			<li><a href="aboutus.html" title="">About us</a></li>
			<li><a href="eshopper/cart1.php" title="Your Cart" data-ripple=""  >cart  Items <i class="fa fa-shopping-cart"style="font-weight:bold"></i><span id="incdeccount"></span></a>
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
	</div><!-- responsive header -->
	
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
		</div>
		
		<div class="top-area">
			<ul class="main-menu">
				<li>
					<a title="">Women</a>
					<ul>
						<li><a href="category.php?category=top" title="">Top</a></li>
						<li><a href="category.php?category=womenjeans" title="">Jeans</a></li>
						<li><a href="category.php?category=womendenim" title="">Denim</a></li>
						<li><a href="category.php?category=nightie" title="">Nightie</a></li>
						<li><a href="category.php?category=bodyfit" title="">Bodyfit</a></li>
						<li><a href="category.php?category=sportsbra" title="">SportsBra</a></li>
						<li><a href="category.php?category=womenwestern" title="">Western</a></li>
						<li><a href="category.php?category=lingerie" title="">Lingerie</a></li>
						<li><a href="category.php?category=womenshirt" title="">Shirt</a></li>

					</ul>
				</li>
				<li>
					<a  title="">Men</a>
					<ul>
						<li><a href="category.php?category=menshirt">Shirt</a></li>
						<li><a href="category.php?category=tshirt">TShirt</a></li>
						<li><a href="category.php?category=menjeans">Jeans</a></li>
						<li><a href="category.php?category=menwestern">Western</a></li>
						<li><a href="category.php?category=gymup">Gym Upper</a></li>
						<li><a href="category.php?category=gymlow">Gym Lower</a></li>
						<li><a href="category.php?category=shorts">Shorts</a></li>



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
					<a  title="Home" data-ripple="">
					<!-- <i class="ti-search"></i></a> -->
					<div class="searched">
					<?php
					// echo date("l jS \of F Y ",date_default_timezone_set("Asia/Calcutta"));
					?>
						<!-- <form method="post" class="form-search"> -->
							<!-- <input type="text" placeholder="Search Friend"> -->
							<!-- <button data-ripple><i class="ti-search"></i></button> -->
						<!-- </form> -->
					</div>
				</li>
				<!-- <li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li> -->
				<!--
                <li>
					<a href="#" title="Notification" data-ripple="">
						<i class="ti-bell"></i><span>20</span>
					</a>
					<div class="dropdowns">
						<span></span>
						<ul class="drops-menu">
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-1.jpg" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-2.jpg" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-3.jpg" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-4.jpg" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-5.jpg" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="notifications.html" title="" class="more-mesg">view more</a>
					</div>
				</li>-->
				
					<script>
						function cartchange(numb,uid)
						{

							var xhttp = new XMLHttpRequest(); 
							// xhttp.onreadystatechange = function()
							//  {
								// if (this.readyState == 4 && this.status == 200) 
							  	// {
								//  document.getElementById("quant").value ="2";

							  	// }
  								// else
  								// {
								// document.getElementById("quant").value ="4";

    // document.getElementById(numbe).innerHTML = "Click Again";

						    	// }

						

									// document.getElementById('sizee').value;
						 a=  parseInt(document.getElementById("incdeccount").innerHTML);
						 a=a+1;
						 document.getElementById("incdeccount").innerHTML=a;
						 console.log(numb);
						 sz=document.getElementById("sizee").value;
						 qn=document.getElementById("quant").value;
						 console.log(uid);
						 tit=document.getElementById("mytitle").innerHTML;
						 pz=document.getElementById("myprice").innerHTML;

						 xhttp.open("GET", "cartupdate.php?userid="+uid+"&postid="+numb+"&size="+sz+"&quantity="+qn+"&priz="+pz+"&titl="+tit, true);
						 xhttp.send();
						 document.getElementById("btnchcol").innerHTML="Added ";
							// }
							console.log("hooo");
							window.location='eshopper/cart1.php';
						}
						function gocrt()
						{
							window.location='eshopper/cart1.php';
						}
					</script>
					<li>
					<!-- <a href="eshopper/cart1.php"> -->
					<i class=""style="font-weight:bold"></i><span id=""></span></a>
					<!-- <div class=""> -->
						<!-- <span>5 Items</span> -->
						<!-- <ul class="drops-menu">
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-1.jpg" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-2.jpg" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-3.jpg" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-4.jpg" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-5.jpg" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul> -->
						<!-- <a href="messages.html" title="" class="more-mesg">view more</a> -->
					<!-- </div> -->
				</li>
			<!--	<li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
					<div class="dropdowns languages">
						<a href="#" title=""><i class="ti-check"></i>English</a>
						<a href="#" title="">Arabic</a>
						<a href="#" title="">Dutch</a>
						<a href="#" title="">French</a>
					</div>
				</li> -->
			</ul>
			<div class="user-img">
			<!-- <li><i class="ti-user"></i> -->
			<li><i class=""></i>
				<!-- <span class="status f-online"></span> -->
				<!-- <div class="user-setting"> -->
				
					<!-- <a href="#" title=""><i class="ti-user"></i> view profile</a> -->
					<!-- <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>  -->
				<!--	<a href="#" title=""><i class="ti-target"></i>activity log</a> -->
				<!--	<a href="#" title=""><i class="ti-settings"></i>account setting</a> -->
					<!-- <a href="#" title=""><i class="ti-power-off"></i>log out</a> -->
				<!-- </div> -->
			</div>
			<!-- <span class="ti-menu main-menu" data-ripple=""></span> -->
		</div>
	</div><!-- topbar -->
    <section>
    <div class="gap gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Hello! <br><?php echo $_SESSION["usern"];?></h4>
                                    <ul class="naves">
                                        <!-- <li>
                                            <i class="ti-clipboard"></i>
                                            <a href="newsfeed.html" title="">Trending</a>
                                        </li> -->
                                      <!--  <li>
                                           <i class="ti-mouse-alt"></i> 
                                            <a href="inbox.html" title=""></a>
                                        </li>
                                        <li>
                                            <i class="ti-files"></i> 
                                            <a href="fav-page.html" title=""></a>
                                        </li>
                                        <li>
                                            <i class="ti-user"></i> 
                                            <a href="timeline-friends.html" title=""></a>
                                        </li>
                                        <li>
                                            <i class="ti-image"></i> 
                                            <a href="timeline-photos.html" title=""></a>
                                        </li>
                                        <li>
                                           <i class="ti-video-camera"></i> 
                                            <a href="timeline-videos.html" title=""></a>
                                        </li>
                                        <li>
                                            <i class="ti-comments-smiley"></i> 
                                            <a href="messages.html" title=""></a>
                                        </li> -->
										<li>
										<i class="ti-home"></i>
										<a href="/" title="">Home</a>
										</li>

                                        <li>
                                            <i class="fa fa-shopping-cart"></i>
                                            <a href="eshopper/cart1.php" title="">My cart</a>
                                        </li>
                                      <!--  <li>
                                            <i class="ti-share"></i>
                                            <a href="people-nearby.html" title=""></a>
                                        </li> -->
                                        <li>
                                            <i class="fa fa-bar-chart-o"></i>
                                            <a href="orders.php" title="">Orders</a>
                                        </li>
                                        <li><i class="ti-user"></i>
                                        <a href="chnpas.php">view profile</a>
                                        </li>
                                        <!-- <li><i class="ti-pencil-alt"></i>
                                        <a href="#" title="">view profile</a>
                                        </li> -->
                                        <li>
                                           <form method="POST"><i class="ti-power-off"></i>
                                            <a href="loggout.php" title="" name="but1">Logout</a></form>
                                        </li>
                                    </ul>
                                </div><!-- Shortcuts -->
                               
								<!-- recent activites -->
                               
								<!-- <div class="widget stick-widget">
                                    <h4 class="widget-title">Who s follownig</h4>
                                    <ul class="followers">
                                        <li>
                                            <figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Allen</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>--><!-- who following -->
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-6">

                            <!-- add post -->
                            <!-- <div class="central-meta">
                                <div class="new-postbox">
                                    <figure>
                                        <img src="images/resources/admin2.jpg" alt="">
                                    </figure>
                                    <div class="newpst-input">
                                        <form method="post">
                                            <textarea rows="2" placeholder="write something"></textarea>
                                            <div class="attachments">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-music"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-image"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-video-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <button type="submit">Post</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                            <!-- add post new box -->
                        
                     <!-- add php here -->

                       
    