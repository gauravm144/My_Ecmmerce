<?php
   session_start();
         if(isset($_SESSION['username']))
   {
      // echo $_SESSION['username'];
      // echo $_COOKIE['username'];
      // setcookie('username',"lp","/");
      setcookie('usserid',"pl","/");

      session_unset();
      session_destroy();
    header("location:/");
    echo "hii";
   }
   else
   {
      echo "hot set";
      echo $_SESSION["username"];
      echo "diff";
      echo $_COOKIE["username"];
   }

?>