<?php
require("./loginn/db.php");
require("./loginn/myfile.php");
$uid="u".$_REQUEST['userid'];
$pid=$_REQUEST['postid'];
$size=$_REQUEST['size'];
// $uid="u"."107";
// $pid="1";
// $size="XL";
$quantity=$_REQUEST["quantity"];

$sql = "SELECT * FROM $uid where orderPostID='$pid' and orderStatus=1 and  size='".$size."'";
$result = $conn->query($sql);
if($result->num_rows>0)
	{
    $sql = "select orderQuantity from $uid where orderPostID='$pid' and orderStatus=1 and size='".$size."'";
    $result1= $conn->query($sql);
    $tempquan=0;
    while($row = $result1->fetch_assoc())
    {
      $tempquan=$row["orderQuantity"];
    }
  
    $quan=(int)$quantity+(int)$tempquan;
    $sql = "Update $uid set orderQuantity='$quan' where orderPostID='$pid' and orderStatus=1 and size='".$size."'";
    $conn->query($sql);
    
   
    }
    else
    {
      $tit=$_REQUEST['titl'];
      $pz=$_REQUEST['priz'];
        $sql="INSERT INTO $uid (orderPostID,orderQuantity,orderStatus,size,title,price)VALUES('$pid','$quantity','1','$size','$tit','$pz')";
        $conn->query($sql);
    }
?>

    
      
  
        

