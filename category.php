<?php
require("./loginn/db.php");
require("./loginn/myfile.php");
include("gauravupper.php");
if(isset($_GET['category']))
{   
    // echo $_GET['category'];
    $tempcat=$_GET['category'];
    $tempcatid;
    $sql="SELECT catID FROM postcategory where catName='$tempcat'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
 { 
    while($row=$result->fetch_assoc())
    {
        $tempcatid=$row["catID"];
        // echo "yu";
        // echo $tempcatid;
    }
    $sql = "SELECT * FROM postshow where categoryID='$tempcatid'";
	$result = $conn->query($sql);
    	if($result->num_rows>0)
	{ $i=0;
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
                                <ins><a href="prod.php?category='.$tempcat.'+&id='.$row["postID"].'" title="">'.$row["title"].'</a></ins> 
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
            
                                 <!--   <i><button class="cart" id="post'.$row["postID"].'" style="border-radius: 12px;width: 100%;border: none;background-color: antiquewhite;">Add To wishlist</button></i>-->
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
                            <a  title="" style="color: black; font-weight: 900; "><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.substr($row["description"],0,30).'</h5> </a>
                            <h5 style="margin-top: 0%; text-align: center; font-weight: 900; color: black;">&#x20b9; '.$row["price"].'/</h5>
                            </p>
                            <i><a href="prod.php?category='.$_GET["category"].'&id='.$row["postID"].'"> <button onclick="cchangeClass('.$row["postID"].')" class="cart" id="'.$row["postID"].'" style="border-radius: 12px;width: 100%;border: none;background-color: antiquewhite;">View Product</button></a></i>

                                
                            </div>
                        </div>
                    </div>
                    <div class="coment-area">
                        <ul class="we-comet">
                           
                            <li>
                                <a href="prod.php?category='.$_GET["category"].'&id='.$row["postID"].'" title="" class="showmore underline">See product reviews</a>
                            </li>
                         <!--  <li class="post-comment">
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
                            </li>-->
                        </ul>
                    </div>
                </div>
                
            </div>';    
        }
	}
    
 }
}
include("gauravlower.php");
?>