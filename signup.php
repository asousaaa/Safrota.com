<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$conn=mysql_connect("127.0.0.1","root","");

mysqli_select_db($conn,"website");
// check connection
error_reporting(0);

if (!$conn){
die("connection failed:".mysql_error());
}
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$BillingAddress = $_POST["BillingAddress"];
$ShippingAddress = $_POST["ShippingAddress"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$userphone = $_POST["userphone"];
if($FirstName==NULL || $FirstName==""){
echo " you must Enter The First Name ..! ";
}
if($LastName==NULL || $LastName==""){
echo " you must Enter The Last Name ..! ";
}
if($BillingAddress==NULL || $BillingAddress==""){
echo " you must Enter The Belling Address ..! ";
}
if($Email==NULL || $Email==""){
echo " you must Enter your Email Address ..! ";
}
if($Password==NULL || $Password==""){
echo " you must Enter The Password ..! ";
}
if($userphone==NULL || $userphone==""){
echo " you must Enter your Phone Number ..! ";
}
$sql="select Email from customer where Email='$Email'";
$result=mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);
if ($count >0) {
 echo " This Mail Already Used ..!";
 }
else
{
$sql = "INSERT INTO  customer (`FirstName`, `LastName`, `BillingAddress`,`ShippingAddress`,`Email`, `Password`,`Phone`) values ('$FirstName','$LastName','$BillingAddress','$ShippingAddress','$Email','$Password','$userphone') ";
mysql_query($sql);
$result2=mysql_query($sql);
if($result2)
{
echo " You are Sign Up Now .. WELCOME to Our Website !! " ;
}
}
mysql_close($conn);
?>