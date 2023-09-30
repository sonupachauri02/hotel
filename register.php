<?php
$rn=$_POST['rn'];
$na=$_POST['na'];
$adh=$_POST['adh'];
$gn=$_POST['gn'];
$gs=$_POST['gs'];
$ad=$_POST['ad'];
$ch=$_POST['ch'];
$add=$_POST['add'];


$con=mysqli_connect("localhost","root","","hotel");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into register values('$rn','$na','$adh','$gn','$gs','$ad','$ch','$add')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "You are Successfully registered";
else
echo "Some problem is occured";
}
?>
