<?php
 require("./loginn/db.php");
 require("./loginn/myfile.php");
 // require("./loginn/myfile.php");
 include ("gauravupper.php");
if(isset($_GET['id']))
{   $gid=$_GET['id'];
    // echo gettype($_GET['id']);
    // echo $_GET['category'];
    $sql = "SELECT * FROM postshow where postID='$gid'";
	$result = $conn->query($sql);
    	if($result->num_rows==1)
	    { 
		while($row = $result->fetch_assoc())
        {
            echo '
            <div class="central-meta item">
                <div class="user-post">
                    <div class="friend-info">
                        <!-- user dp for post -->
                        <!-- <figure>
                        <img src="images/resources/friend-avatar10.jpg" alt="">
                        </figure> -->
    
                        <div class="friend-name">
                                <ins><a href="detail.php?category=top&id='.$row["postID"].'" title="">'.$row["title"].'</a></ins> 
                            <span>published: june,2 2018 19:PM</span>
                        </div>
                        <div class="post-meta">
                            <img src="postimg/'.$row["categoryID"].'/'.$row["image1"].'" alt="">
                            
                            <div class="we-video-info">
                                <ul>
                                    <!-- views button -->
                                    <!-- <li>
                                        <span class="views" data-toggle="tooltip" title="views">
                                            <i class="fa fa-eye"></i>
                                            <ins>1.2k</ins>
                                        </span>
                                    </li> -->
                                    <i style="margin-right: 2px;">
                                        <span class="like" data-toggle="tooltip" title="like">
                                            <i class="ti-heart"></i>
                                            <ins>2.2k</ins>
                                        </span>
                                    </i>
                                    <i style="margin-right: 2px;">
                                        <span class="comment" data-toggle="tooltip" title="Comments">
                                            <i class="fa fa-comments-o"></i>
                                            <ins>52</ins>
                                        </span>
                                    </i>
                                
                                    <i class="fa fa-share" style="margin-left: 2px;margin-right: 71px;"></i>
                                    <br>
            
                                    <i><button class="cart" id="post'.$row["postID"].'" style="border-radius: 12px;width: 100%;border: none;background-color: antiquewhite;">Add To wishlist</button></i>
                                    <!-- <i style="border:none;outline: 0;padding: 12px;"><button class="cart" id="2">wishlist</button></i> -->
                                    <!-- <li>
                                        <span class="dislike" data-toggle="tooltip" title="dislike">
                                            <i class="ti-heart-broken"></i>
                                            <ins>200</ins>
                                        </span>
                                    </li> -->
                                    <!-- <li>
                                        <span class="share" data-toggle="tooltip" title="share">
                                            <i class="fa fa-share"></i>
                                            <ins>200</ins>
                                        </span>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="description" style="margin-top: 0%;">
                                
                                <p>
                                <a href="#" title="" style="color: black; font-weight: 900;"><h5>Test drive booking !Test drive booking Test drive booking</h5> </a>
                                <h5 style="margin-top: 0%; text-align: center; font-weight: 900; color: black;">Rs 100/</h5>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="coment-area">
                        <ul class="we-comet">
                            <li>
                                <div class="comet-avatar">
                                    <img src="images/resources/comet-1.jpg" alt="">
                                </div>
                                <div class="we-comment">
                                    <div class="coment-head">
                                        <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                        <span>1 year ago</span>
                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                    </div>
                                    <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comet-avatar">
                                            <img src="images/resources/comet-2.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
                                                <span>1 month ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                            </div>
                                            <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comet-avatar">
                                            <img src="images/resources/comet-3.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                <span>16 days ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                            </div>
                                            <p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comet-avatar">
                                    <img src="images/resources/comet-1.jpg" alt="">
                                </div>
                                <div class="we-comment">
                                    <div class="coment-head">
                                        <h5><a href="time-line.html" title="">Donald Trump</a></h5>
                                        <span>1 week ago</span>
                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                    </div>
                                    <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
                                        <i class="em em-smiley"></i>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#" title="" class="showmore underline">more comments</a>
                            </li>
                            <li class="post-comment">
                                <div class="comet-avatar">
                                    <img src="images/resources/comet-1.jpg" alt="">
                                </div>
                                <div class="post-comt-box">
                                    <form method="post">
                                        <textarea placeholder="Post your comment"></textarea>
                                        <div class="add-smiles">
                                            <span class="em em-expressionless" title="add icon"></span>
                                        </div>
                                        <div class="smiles-bunch">
                                            <i class="em em---1"></i>
                                            <i class="em em-smiley"></i>
                                            <i class="em em-anguished"></i>
                                            <i class="em em-laughing"></i>
                                            <i class="em em-angry"></i>
                                            <i class="em em-astonished"></i>
                                            <i class="em em-blush"></i>
                                            <i class="em em-disappointed"></i>
                                            <i class="em em-worried"></i>
                                            <i class="em em-kissing_heart"></i>
                                            <i class="em em-rage"></i>
                                            <i class="em em-stuck_out_tongue"></i>
                                        </div>
                                        <button type="submit"></button>
                                    </form>	
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>';    
        }
	}
}
else
{
    echo "nm";
}
include ("gauravlower.php");  
?>