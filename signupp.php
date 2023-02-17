<?php

$name=$_POST['Firstname'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$Gender=$_POST['gender'];
$sem=$_POST['Semester'];
$conn=new mysqli("localhost","root","","employee");
$q="insert into stdinfo(name,email,pass,Gender,sem) values('".$name."','".$email."','".$pass."','".$Gender."','".$sem."')";


$result=$conn->query($q);
if($result==TRUE)
{
    header("location:signin.php");
}
















?>