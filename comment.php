<?php
    if(isset($_GET["id"]))
{
            $v=$_GET["id"];
            $sql = "SELECT * FROM postcomment where compostID='$v' order by comno desc";
            $result = $conn->query($sql);
    // echo $_GET["id"];
    if($result->num_rows>0)
    {   

            while($row = $result->fetch_assoc())
                {
                    $tmpusname=$row["comuserID"];
                    $sql= "SELECT name FROM userprofile where userID='$tmpusname'";
                    $result1 = $conn->query($sql);
                        while($row1 = $result1->fetch_assoc())
                    {
                        $tmpusname=$row1["name"]; 
                    }  
                 echo'    <li id="">
                    
                        <div class="we-comment" style="width: 528px;">
                            <div class="coment-head">
                                <h5><a>'.$tmpusname.'</a></h5>
                                <!--<span>1 year ago</span>
                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>-->
                            </div>
                            <p>'.$row["commenttext"].'</p>
                        </div>
                    </li>';
                }
    }
    
}
 ?>      
