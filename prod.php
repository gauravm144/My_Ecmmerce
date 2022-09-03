<?php
    require("./loginn/db.php");
    require("./loginn/myfile.php");
    include ("gauravupper.php");
?>

    <link rel="stylesheet" href="./prod/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<?php
if(isset($_GET["id"]))
{
    $v=$_GET["id"];
    $sql = "SELECT * FROM postshow where postID='$v'";
    $result = $conn->query($sql);
    // echo $_GET["id"];
    $temp="";
    if($result->num_rows>0)
	{ 
    while($row = $result->fetch_assoc())
        {  
echo '
<div class="">   
  <div class=""> 
    <div class = "">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
            <!--  <img src = "./prod/shoes_images/shoe_1.jpg" alt = "shoe image">
             
              <img src = "./prod/shoes_images/shoe_2.jpg" alt = "shoe image">
              <img src = "./prod/shoes_images/shoe_3.jpg" alt = "shoe image">
              <img src = "./prod/shoes_images/shoe_4.jpg" alt = "shoe image"> -->
              <img style="height: 300px;" src = "postimg/'.$row["categoryID"].'/'.$row["image1"].'" alt = "skol image">
              <img src = "postimg/'.$row["categoryID"].'/'.$row["image2"].'" alt = "skol image">
              <img src = "postimg/'.$row["categoryID"].'/'.$row["image3"].'" alt = "skol image">

            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
              <img src = "postimg/'.$row["categoryID"].'/'.$row["image1"].'" alt = "skol image">

              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
              <img src = "postimg/'.$row["categoryID"].'/'.$row["image2"].'" alt = "skol image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
              <img src = "postimg/'.$row["categoryID"].'/'.$row["image3"].'" alt = "skol image">

              </a>
            </div>
          
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h4 class = "product-title" style="font-size:2rem" id="mytitle">'.$row["title"].'</h4>
          <!-- <a href = "#" class = "product-link">visit nike store</a> -->
          <!-- <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div> -->

          <div class = "product-price">
            <!-- <p class = "last-price">Old Price: <span>$257.00</span></p> -->
            <p class = "new-price">Price:  &#x20b9;<span id="myprice">'.$row["price"].'</span></p>
          </div>

          <div class = "product-detail">
            <h2 style="font-size:1.5rem">Description </h2>
            <p style="font-size:1.2rem">'.$row["description"].'</p>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
            <ul>
              <!-- <li>Color: <span>Black</span></li> -->
              <!-- <li>Available: <span>in stock</span></li> -->
             <!-- <li>Category: <span>Shoes</span></li> -->
              <!-- <li>Shipping Area: <span>All over the world</span></li> -->
             <li>Shipping Fee: <span>Free</span></li>
            <!--  <li>In Stock: <span>Yes</span></li> -->

            </ul>
          </div>

          <div class = "purchase-info">
          <label for="car">Quantity:</label>
            <input id="quant" type = "number" min = "0" value = "1" max="'.$row["quantity"].'">
            <br>';
            $sz=array($row["XL"],$row["XXL"],$row["XXXL"],$row["S"],$row["M"],$row["L"]);
            $sz2=array(0,0,0,0,0,0);
            for($i=0;$i<6;$i++)
            {
              if($sz[$i]==1)
              $sz2[$i]=1;
            }
            $sz1=array("XL","XXL","XXXL","S","M","L");
          
            echo'<label for="cars">Choose Size:</label>
              <select  id="sizee" required>
              '; 
              for($i=0;$i<6;$i++)
              { 
                if($sz2[$i]==1)
                echo '<option value="'.$sz1[$i].'" >'.$sz1[$i].'</option>';
              }
                echo'
              
              
              </select>
              <br>
              <br>
              ';
              if($row["statuspost"]==1&&$row['quantity']>0)
              {
              echo '
           <a> <button  onclick="cartchange('.$v.','.$_SESSION['userid'].')"  type = "button" class = "btn" style="width: 100%;background:#256eff !important;">
              Buy  <i class = "fas fa-shopping-cart"></i>
            </button></a>
            <button id="btnchcol" onclick="cartchange('.$v.','.$_SESSION['userid'].')" type = "button" class = "btn" style="width: 100%">
            Add to cart  <i class = "fas fa-shopping-cart"></i>
          </button>';
              }
              else
              {
                echo ' <p class = "btn" style="width: 100%;background:#256eff !important;">
                Out of Stock  <i class = ""></i>
              </p>';
              }
          echo'

            <!-- <button type = "button" class = "btn">Compare</button> -->
          </div>

          <!-- <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>';  
        }
      }
    }
?>

<script>
  function changeClass()
{
  vb=document.getElementById("pressbut").value;
    no=document.getElementById("rmbar").innerHTML;
    document.getElementById("rmbar").innerHTML="";
    
    // document.getElementById(numbe).style.backgroundColor="#0000FF";
    // document.getElementById(numbe).innerHTML="Added";
    console.log("opop");    
    
var xhttp = new XMLHttpRequest(); 
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) 
  {
document.getElementById("addmorecomment").innerHTML +=this.response;

location.reload();
  }
  else
  {
    // document.getElementById(numbe).innerHTML = "Click Again";

  }
 
};
var x="<?php echo $v ?>";
xhttp.open("GET", "commentupdate.php?com="+vb+"&pid="+x, true);
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
  </script>



<div class="central-meta item">
    <div class="user-post loadmore">
        
        <div class="coment-area">
             <ul class="we-comet" id="addmorecomment">
                
                <li class="post-comment"></li>
                <h5 style="font-weight:700" >Comment Section</h5>
                <!-- <div class="we-comment">
                  <div class="coment-head">
                   <h5><a href="time-line.html" title="">Jason borne</a></h5>
                   <span>1 year ago</span>
                   <a class="we-reply" href="#" title="Reply"><i class=""></i></a>
                  </div>
                  <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
                </div> -->
                <li>
                <textarea placeholder="Post your comment" id="pressbut"></textarea>
                <button  onclick="changeClass()"style="width: 100%; border-radius: 59px;background:#088dcd;color:#fff;border: medium none;font-size: 13px;font-weight: 600;padding: 3px 10px;" >Submit</button>
                </li>
                    <?php include("comment.php")?>
                    <li class="post-comment" id="rmbar">
                    <div class="">
                        
                            <!-- <textarea placeholder="Post your comment" id="pressbut"></textarea> -->
                            <!-- <div class="add-smiles">
                                <span class="" title=""></span>
                            </div> -->
                            <!-- <div class="smiles-bunch">
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
                            </div> -->
                            <!-- <button  onclick="changeClass()"style="width: 100%; border-radius: 59px;background:#088dcd;color:#fff;border: medium none;font-size: 13px;font-weight: 600;padding: 3px 10px;" >Submit</button> -->
                                                     
                      </div>
                    </li>              
            </ul>
        </div>
    </div>
    
</div>
    <script src="./prod/script.js"></script>
 <?php
 include ("gauravlower.php");  
 ?>