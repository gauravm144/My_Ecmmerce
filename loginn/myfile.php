<?php
 session_start();
 try{
    if(!isset($_SESSION['username']))
    header("location:login.php");
    //  header("location:/cdf/combined.php");
    //  else
        // { header("location:/cdf/loginn/index.php");
        // }
    }
    catch(Exception $ex){}



?>
<!-- // if(isset($_POST['but1']))
// {
//     session_unset();
//     session_destroy();
//     sleep(3);
//     header("location:signup.php");
// }
// else
// {
//     echo "kr fer";
// } -->
<!-- <form method="post">
<button name="but1">Click me</button>
</form> -->