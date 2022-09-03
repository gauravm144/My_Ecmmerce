<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info
session_start();
try{
if(isset($_SESSION['username']))
header("location:/");
  }
catch(Exception $ex){}
?>
