<?php
$na=$_POST['txt'];
$em=$_POST['em'];
$pw=$_POST['pw'];


$con=mysqli_connect("localhost","root","","hotel");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into signup values('$na','$em','$pw')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "You are Successfully registered";
else
echo "Some problem is occured";
}
?>
