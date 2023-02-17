<?php

$ID=$_GET['id'];
$conn=new mysqli("localhost","root","","Employee");
$q="Delete from stdinfo where id=".$ID;

$result=$conn->query($q);
if($result==TRUE)
{
    header("location:show.php");
}




?>