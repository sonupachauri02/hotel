<?php

$em=$_POST['em'];
$pw=$_POST['pw'];

$con=mysqli_connect("localhost","root","","hotel");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from signup where email ='$em' and password='$pw'";

$res=mysqli_query($con,$q);

$r=mysqli_fetch_row($res);

if($r>0)
header("location:room.html");
else
echo "Email or password is incorrect";
}
?>
