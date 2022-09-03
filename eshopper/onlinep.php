<?php
echo "may";
print_r($_REQUEST);
include("../loginn/db.php");
echo $_COOKIE['usserid'];
$sql="SELECT orderNo FROM userordertable WHERE userID ='".$_COOKIE['usserid']."' ORDER BY orderNo DESC Limit 1";
$result = $conn->query($sql);
if($result->num_rows>0)
{ 
  while($row = $result->fetch_assoc())
  {
    echo "<br>".mysqli_num_rows($result)."huhu<br>";
    echo "row->".$row['orderNo']."<-row<br>";
    $sql = "SELECT * FROM u".$_COOKIE['usserid']." where orderStatus=1";
	$result1 = $conn->query($sql);
	$clcamt=0;
	$amt=0;
    if($result1->num_rows>0)
    	{ 
      while($row1 = $result1->fetch_assoc())
    	  { 
    		  $amt=$row1["price"]*$row1["orderQuantity"];
    		  $clcamt+=$amt;
    	  }
    	  echo "amount".$clcamt."aa<br>";
    	}
        $sql = "update userordertable set totalItems=".mysqli_num_rows($result1)." ,
			cost=".$clcamt.", status=3 ,transamount=".$_REQUEST['transamount']." , bankid='".$_REQUEST['bankid']."' ,paymentsux='".$_REQUEST['paymentsux']."',paymentid='".$_REQUEST['paymentid']."',payment='".$_REQUEST['payment']."'  where orderNo=".$row['orderNo']."";
			$result1 = $conn->query($sql);
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

  }
}
header('location:../orders.php');
?>