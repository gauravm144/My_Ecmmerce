<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
function changeClass(numbe)
{
    // no=document.getElementById("views"+numbe.toString()).innerHTML;
    // document.getElementById(numbe).style.backgroundColor="#0000FF";
    // document.getElementById(numbe).innerHTML="Added";
    // console.log("opop");    
    
var xhttp = new XMLHttpRequest(); 
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) 
  {
document.getElementById("people-list").innerHTML +=this.response;
  }
  else
  {
    document.getElementById(numbe).innerHTML = "Click Again";

  }
 
};
xhttp.open("GET", "cartupdate.php?id="+numbe, true);
xhttp.send();

    // var xmlhttp=new XMLHttpRequest();
    // xmlhttp.onreadystatechange=function(){
    //     if(if (xmlhttp.readyState == 4 && xmlhttp.status == 200))
    //     {
    //     var return_data=http.responseText;
    //     document.getElementById("views"+numbe.toString()).innerHTML=return_data; 
    //     }
    // }
    // xmlhttp.open("GET","wishlist.php?q="+no,true);
    // xmlhttp.send();
}
function changeClasslike(numbe)
{   
    
    no=document.getElementById("views"+numbe.toString()).innerHTML;
    console.log("happened"+no);
    // document.getElementById("inclike"+numbe.toString()).innerHTML="lok";
    // onclick="changeClasslike('.$row["postID"].')"
    
    
    // document.getElementById(numbe).innerHTML="Added";
 
}
function cancelorder(odid)
{
    var xhttp = new XMLHttpRequest();
    // if (xmlhttp.readyState == 4 && xmlhttp.status == 200))
        // {
        // var return_data=xhttp.responseText;
        // document.getElementById("haha").innerHTML=return_data; 
        // }
    xhttp.open("GET", "cancelorder.php?odno="+odid, true);
    xhttp.send();
// console.log("clicked"+odid);
location.reload();

}
</script>



<div class="loadMore">
    <?php 

    // $sql = "SELECT * FROM u".$_COOKIE['usserid']." Inner join userordertable where u".$_COOKIE['usserid'].".orderednum=userordertable.orderNo order by userordertable.orderNo desc";
    $sql = "SELECT * FROM userordertable where userID=".$_COOKIE['usserid']." order by orderNo desc";
    $result = $conn->query($sql);
    	if($result->num_rows>0)
	        { 
                // $i="";
		while($row = $result->fetch_assoc())
        {   
            
            // $temp=$row["categoryID"];
            // $sql = "SELECT catName FROM postcategory where catID='$temp'";
            // $result1 = $conn->query($sql);
            // while($row1 = $result1->fetch_assoc())
            // {
                // $i=$row1["catName"];
            // }

            echo '
            <div class="central-meta item">
                <div class="user-post">
                    <div class="friend-info">
                        <!-- user dp for post -->
                        <!-- <figure>
                        <img src="images/resources/friend-avatar10.jpg" alt="">
                        </figure> -->
    
                        <div class="friend-name">
                                <ins><a>Order No '.$row["orderNo"].'</a></ins> 
                            <span style="font-weight:900;">Ordered on: '.$row["ordertime"].'</span>
                        </div>
                        <div class="post-meta">
                    
                        <table style="width:100%;">
                        <tr style="font-weight: inherit;">
                        <th>Product </th>
                        <th>Price </th>
                        <th>Quantity </th>
                        <th>Size </th>
                        </tr>
                        ';
                        $sql="select * from u".$_COOKIE['usserid']." where orderednum=".$row['orderNo']."";
                        $result3 = $conn->query($sql);
                        if($result->num_rows>0)
                        { 
                                // $i="";
                            while($row3 = $result3->fetch_assoc())
                            {   
                         echo '<tr>
                            <th id="haha">'.$row3['title'].' </th>
                            <th>'.$row3['price'].' </th>
                            <th>'.$row3['orderQuantity'].' </th>
                            <th>'.$row3['size'].' </th>
                            </tr>';
                            }
                        }
                        echo '</table>    

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
                                    <span class="views" data-toggle="tooltip" title="status">
                                        <i class="" id="like'.$row["totalItems"].'"></i>
                                         Order Status : ';
                                         switch ($row['status']) 
                                         {

                                          case 3:echo "Confirmed";
                                          break;
                                          case 4:echo "Dispatch";
                                          break;
                                          case 5:echo "Out for delivery";
                                          break;
                                          case 6:echo "Delivered";
                                          break;
                                          case 7:echo "Canceled";
                                          break;
                                          default:
                                          echo "We are updating";
                                         }
                                      
                                         echo'
                                    </span>
                                    </i>
                                    <br>
                                    <i style="margin-right: 2px;">
                                        <span class="views" data-toggle="tooltip" title="items">
                                            <i class="" id="like'.$row["totalItems"].'"></i>
                                             Items : '.$row["totalItems"].'
                                        </span>
                                    </i>
                                    <br>
                                    <i style="margin-right: 2px;">
                                        <span class="comment" data-toggle="tooltip" title="cost">
                                            <i class=""></i>
                                            Cost : &#8377; '.$row["cost"].'
                                        </span>
                                    </i>
                                    <br>
                                    <br>';
                                         if($row['status']>=3 && $row['status']<7)
                                         {
                                    echo '<i style="margin-right: 2px;">
                                    <button onclick="cancelorder('.$row['orderNo'].');" style="background: red;color: white;border: none;border-radius: 1rem;" class="comment" data-toggle="tooltip" title="cancel">
                                        
                                        Cancel
                                    </button>';
                                         }
                                echo '</i>

                                
                                  <!--  <i class="fa fa-share" style="margin-left: 2px;margin-right: 71px;"></i> -->
                                       
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
                             
                            </div>
                        </div>
                    </div>
                    <div class="coment-area">
                        <ul class="we-comet">
                       
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
    
        
    
    ?>

    <!-- add meta here inside-->

</div>