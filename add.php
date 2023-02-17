<?php


$name=$_POST['Name'];

$email=$_POST['Email'];
$password=$_POST['Password'];
$conn=new mysqli("localhost","root","","Employee");

$q="INSERT INTO stdinfo(name,email,pass) value('".$name."','".$email."','".$password."')";

if($conn->query($q)==TRUE)
{
    echo "INSERTED";
    header("location:index.php");

}
else
{
    echo "not inserted";
}







?>