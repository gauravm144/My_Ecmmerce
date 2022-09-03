<?php
// include("../../loginn/db.php");
// include("../../loginn/myfile.php");

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue)
		{
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
		echo "<a id='pl' href="."/cdf/eshopper/onlinep.php?transamount=".$_POST['TXNAMOUNT']."&bankid=".$_POST['BANKTXNID']."&paymentsux=".$_POST['STATUS']."&paymentid=".$_POST['TXNID']."&payment=".$_POST['ORDERID'].">ap</a>";
		echo "<script>var a = document.getElementById('pl');a.click();</script>";

		// setcookie("currency",$_POST['CURRENCY'],time() + (60*60*24), "/");
		// setcookie("responsemsg",$_POST['RESPMSG'],time() + (60*60*24), "/");
		// setcookie("respcode",$_POST['RESPCODE'],time() + (60*60*24), "/");
		// setcookie("amount",$_POST['TXNAMOUNT'],time() + (60*60*24), "/");
		// setcookie("ordid",$_POST['ORDERID'],time() + (60*60*24), "/");
		// setcookie("ordstat",$_POST['STATUS'],time() + (60*60*24), "/");
		// setcookie("bnkid",$_POST['BANKTXNID'],time() + (60*60*24), "/");
		// setcookie("dte",$_POST['TXNDATE'],time() + (60*60*24), "/");
		
		// print_r($_POST);
		echo "<br>";
		// include("../../loginn/db.php");
		// include("../../loginn/myfile.php");
		// $sql="SELECT orderNo FROM userordertable WHERE userID =".$_COOKIE['userid']." ORDER BY orderNo DESC Limit 1";
		// $result = $conn->query($sql);
		// if($result->num_rows>0)
		// { 
	 	//  while($row = $result->fetch_assoc())
		//   {
			// echo "row->".$row['orderNo']."<-row<br>";
		// 	$sql = "SELECT * FROM u".$_COOKIE['userid']." where orderStatus=1";
		// 	$result1 = $conn->query($sql);
		// 	$clcamt=0;
		// 	$amt=0;
		// 	// echo "result1->".mysqli_num_rows($result1)."<-jj<br>";
		// 	if($result1->num_rows>0)
		// 	{ 
		//   while($row1 = $result1->fetch_assoc())
		// 	  { 
		// 		  $amt=$row1["price"]*$row1["orderQuantity"];
		// 		  $clcamt+=$amt;
		// 	  }
		// 	//   echo "amount".$clcamt."aa<br>";
		// 	}
		// 	$sql = "update userordertable set totalItems=".mysqli_num_rows($result1)." ,
		// 	cost=".$clcamt.", status=3 ,transamount=".$_POST['TXNAMOUNT']." , bankid='".$_POST['BANKTXNID']."' ,paymentsux='".$_POST['STATUS']."',paymentid='".$_POST['TXNID']."',payment='".$_POST['ORDERID']."'  where orderNo=".$row['orderNo']."";
		// 	$result1 = $conn->query($sql);
		// 	$sql = "SELECT * FROM u".$_COOKIE['userid']." where orderStatus=1";
		// 	$result = $conn->query($sql);
			


		//   }
		// }
		// echo "<br>".$_POST["CURRENCY"];
		// session_start();
		// echo $_SESSION['userid'];
		// setcookie("currency",$_POST['CURRENCY'],time() + (60*60*24), "/");
		// setcookie("responsemsg",$_POST['RESPMSG'],time() + (60*60*24), "/");
		// setcookie("respcode",$_POST['RESPCODE'],time() + (60*60*24), "/");
		// setcookie("amount",$_POST['TXNAMOUNT'],time() + (60*60*24), "/");
		// setcookie("ordid",$_POST['ORDERID'],time() + (60*60*24), "/");
		// setcookie("ordstat",$_POST['STATUS'],time() + (60*60*24), "/");
		// setcookie("bnkid",$_POST['BANKTXNID'],time() + (60*60*24), "/");
		// setcookie("dte",$_POST['TXNDATE'],time() + (60*60*24), "/");
		
		// echo "<br>";

		// echo "fuck".$_COOKIE['userid'];
		// echo "<br>";
		// echo $_COOKIE['responsemsg'];
		// echo "<br>";
		// echo $_COOKIE['respcode'];
		// echo "<br>";
		// echo $_COOKIE['amount'];
		// echo "<br>";
		// echo $_COOKIE['ordid'];
		// echo "<br>";
		// echo $_COOKIE['ordstat'];
		// echo "<br>";
		// echo $_COOKIE['bnkid'];
		// echo "<br>";
		// echo $_COOKIE['dte'];
		// echo "<br>";
// orderid,



		// echo $_SESSION['userid'];
		// sleep(3);
		// $pl="u".$_SESSION['userid'];
		// $sql = "delete FROM u107 where orderStatus=1";
		// $conn->query($sql);
		// header("location:../../mycheckpayment.php");
		// echo $_COOKIE["userid"];
		// sleep(3);
		
	
			// header("location:../../eshopper/checkout.php");
			
		// echo '<a href="/cdf/eshopper/cart1.php">Press to go</a>';
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>