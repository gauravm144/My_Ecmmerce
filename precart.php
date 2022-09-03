<?php
    require("./loginn/db.php");
    require("./loginn/myfile.php");
    
?>

<?php
if(isset($_REQUEST['id']))
{
$uid="u".$_SESSION['userid'];
$odn=$_REQUEST['id'];
echo $uid."   ".$odn."<br>";
try{
$sql = "Delete FROM $uid where orderNo='$odn'";
$result = $conn->query($sql);
echo $result."hi";
}
catch(Exception $e)
{
    echo "no".$e;
}
}
?>