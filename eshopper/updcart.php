<?php
    require("../loginn/db.php");
    require("../loginn/myfile.php");
    
?>

<?php
// if(isset($_REQUEST['id']))
// {
// $uid="u".$_SESSION['userid'];
// $odn=$_REQUEST['id'];
// echo $uid."   ".$odn."<br>";
// try{
// $sql = "update $uid set orderQyantity='$odn' where orderNo='$odn'";
// $result = $conn->query($sql);
// echo $result."hi";
// }
// catch(Exception $e)
// {
//     echo "no".$e;
// }
// }
// if(isset($_POST['uid'])
// {

// }
if(isset($_REQUEST["odid"])&&isset($_REQUEST["qty"]))
{
    echo $_REQUEST["odid"];
    echo $_REQUEST["qty"];
    $ud="u".$_SESSION["userid"];
    // echo $ud;
    $qt=$_REQUEST["qty"];
    $on=$_REQUEST["odid"];

    $sql = "update  $ud set orderQuantity=$qt where orderNo='$on'";
    $result = $conn->query($sql);

    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
        echo "hi";   
        }
    }

}
echo "grat person";
?>