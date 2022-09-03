<?php
if($_GET['odno']&&isset($_COOKIE['usserid']))
{
    require ("loginn/db.php");
    echo "hip";
    $sql = "update userordertable set status=7 where orderNo=".$_GET['odno']." and userID=".$_COOKIE['usserid']."";
    $conn->query($sql);
    $sql = "update u".$_COOKIE['usserid']." set orderStatus=7 where orderednum=".$_GET['odno']."";
    $conn->query($sql);
}
?>