<?php

session_start();
session_destroy();
echo"Session destroyed";
header("location:signin.php");

?>