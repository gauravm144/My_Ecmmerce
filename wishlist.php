<?php
include("loginn/db.php");
$no_of=$_REQUEST["q"]+1;
// $no_of+=11;
$uid=1;
// echo $no_of;
// echo $uid;
$sql="update postshow set likes='$no_of' where postID ='$uid';";
$result = $conn->query($sql);
$sql="select likes from postshow where postID ='$uid';";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    echo $row["likes"];
}
// header("location:index.html");
?>