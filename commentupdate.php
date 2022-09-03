<?php
if(isset($_REQUEST["pid"]) && isset($_REQUEST["com"])); 
    {   include("loginn/db.php");
        if(!isset($_SESSION['userid']))
        session_start();
        $v=$_REQUEST["pid"];
        $v1=$_REQUEST["com"];
        $v2=$_SESSION["userid"];
        // echo gettype($v).$v;
        // echo gettype($v1).$v1;
        // echo gettype($v2).$v2;
        $sql="INSERT INTO postcomment(compostID,comuserID,commenttext)VALUES('$v','$v2','$v1')";
        $result = $conn->query($sql);
        $sql="Select commentno from postshow where postID=".$_REQUEST['pid']."";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {
            $getcmno=$row['commentno'];
        }
        $getcmno+=1;
        $sql="Update postshow set commentno=".$getcmno." where postID=".$_REQUEST['pid']."";
         $conn->query($sql);
     
        
    echo '<li id="">
           
        <div class="we-comment" style="width: 528px;">
            <div class="coment-head">
                <h5><a>'.$_SESSION["usern"].'</a></h5>
                <!-- <span>1 year ago</span>
                 <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>-->
            </div>
            <p>'.$_REQUEST["pid"].$_REQUEST["com"] .'</p>
        </div>
    </li><br>';
}
?>