<?php

error_reporting(0);


if (0 > version_compare(PHP_VERSION, '4')) {
    die('This file was generated for PHP 4');
}



 
class Controler
{
    

  
   
     
    function createAds($adsobj,$bookobj,$labobj,$mobobj,$camobj,$index)
    {
        
		if($index==1){ // book ads
			
			
$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"it");

$insert_query= " INSERT INTO `product`(`ItemName`,`QuantityInStock`,`Visible`, `Category`, `ItemDescription`,`Author`, `Title`, `Publisher`,`Price`, `Type`) 
values ('$adsobj->ItemName','$adsobj->adscount','1','$adsobj->category','$adsobj->Description','$bookobj->Author',
'$bookobj->bookname','$bookobj->Publisher','$bookobj->Price','$bookobj->Type')";
$result=mysqli_query($connenction_link,$insert_query);
$count = mysqli_num_rows($result);
if ($count == 0) {
	
	echo '<script>window.alert("ads created sucssefully");window.open("../../home.html","_self")</script>';
	
}

mysqli_close($connenction_link);
		
		
		}
		
		
		if($index==2){ // labtop ads
			

		
		
		$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);
			
			
			$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"it");


$insert_query= " INSERT INTO `product`(`ItemName`,`QuantityInStock`,`Visible`, `Category`, `ItemDescription`,`Cpu`,`Hdd`, `Ram`, `Price`,`Manfactor`) 
values ('$adsobj->ItemName','$adsobj->adscount','available','$adsobj->category','$adsobj->Description','$labobj->cpu',
'$labobj->hdd','$labobj->ram','$labobj->Price','$labobj->manefactor')";
$result=mysqli_query($connenction_link,$insert_query);
$count = mysqli_num_rows($result);
if ($count == 0) {
	
	echo '<script>window.alert("ads created sucssefully");window.open("../../home.html","_self")</script>';
	
}

mysqli_close($connenction_link);
		
		
		}
		
		
		if($index==3){ // mobile ads
			

		
	
		
		$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);
			
			
			$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"it");

$insert_query= "INSERT INTO `product`(`ItemName`,`QuantityInStock`,`Visible`, `Category`, `ItemDescription`,`Screen`, `Cpu`,`Manfactor`,`Price`,`Ram`) 
values ('$adsobj->ItemName','$adsobj->adscount','available','$adsobj->category','$adsobj->Description','$mobobj->screen',
'$mobobj->cpu','$mobobj->manfactor','$mobobj->price','$mobobj->ram')";
$result=mysqli_query($connenction_link,$insert_query);
$count = mysqli_num_rows($result);
if ($count == 0) {
	
	echo '<script>window.alert("ads created sucssefully");window.open("../../home.html","_self")</script>';
	
}
mysqli_close($connenction_link);
		}
		
		
if($index==4){ // camera ads
			

		
	
		
		$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);
			
			
			$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"it");



$insert_query= "INSERT INTO `product`(`ItemName`,`QuantityInStock`,`Visible`, `Category`, `ItemDescription`,`Battary`, `Pixels`,`Type` ,`Price`,`Zoom`) 
values ('$adsobj->ItemName','$adsobj->adscount','1','$adsobj->category','$adsobj->Description','$camobj->battary',
'$camobj->pixels','$camobj->type','$camobj->Price','$camobj->zoom')";
$result=mysqli_query($connenction_link,$insert_query);
$count = mysqli_num_rows($result);
if ($count == 0) {
	
	echo '<script>window.alert("ads created sucssefully");window.open("../../home.html","_self")</script>';
	
}

mysqli_close($connenction_link);
		
}
		
			
    }
	
	
	
    
    function updateInfo ()
    {
        
		$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query= " SELECT * FROM `customer` WHERE CustomerID = '$userid'  ";
		
	$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

// view result
return $result;



    }

    
    function sign_up($obj)
    {
		
		 $email =$obj->Email;
          $pass =$obj->Password;
		  $fname =$obj->FirstName;
		   $lname =$obj->LastName;
           $phone =$obj->Phone;
	               
				if($email !=null && $pass !=null && $fname !=null && $lname !=null && $phone !=null){  
$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$select_query= " SELECT * FROM `customer` WHERE Email ='$email' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query);
$count = mysqli_num_rows($result);
if ($count >0) {
	echo '<script>window.open("welcome.php#signupScreen","_self");window.alert("E-mail may be used try again.")</script>';
	
}
else {
	$insert_query= " INSERT into customer (Email,Password,FirstName,LastName,Phone) values ('$email','$pass','$fname','$lname','$phone')";
$result=mysqli_query($connenction_link,$insert_query);
	echo '<script>window.alert("Your account created ,Plz log in and update your information");window.open("welcome.php","_self")</script>';
	
}

mysqli_close($connenction_link);
		
    }
	else {
		echo '<script>window.alert("one or more fields are missed.");window.open("welcome.php#signupScreen","_self")</script>';
	}
	}
	
	
	
	
	
   
    function Login($obj)
    {
        $emails =$obj->Email;
$pass =$obj->Password;
if($emails != "" ){
	if($pass != ""){
		$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$select_query= " SELECT * FROM `customer` WHERE Email ='$emails' and Password ='$pass' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query);
$count = mysqli_num_rows($result);
if ($count > 0) {
	
$row = mysqli_fetch_array($result);

	$myfile = fopen("Customer/user.txt", "w") or die("Unable to open file!");
fwrite($myfile,$row["CustomerID"]);
fclose($myfile);

	
	header('Location: Customer/home.html');
}
else {
	echo '<script>window.alert("E-mail or password may be wrong try again.");window.open("welcome.php#loginScreen","_self")</script>';
}
mysqli_close($connenction_link);
	}

}
    }
	
	
	
	
	 function Loginadmin($obj)
    {
        $username =$obj->username;
$pass =$obj->Password;
if($username != "" ){
	if($pass != ""){
		$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$select_query= " SELECT * FROM `admin` WHERE Username ='$username' and Password ='$pass' ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query);
$count = mysqli_num_rows($result);
if ($count > 0) {
	
$row = mysqli_fetch_array($result);

	$myfile = fopen("Admin/admin.txt", "w") or die("Unable to open file!");
fwrite($myfile,$row["AdminID"]);
fclose($myfile);

	
	header('Location: Admin/home.html');
}
else {
	echo '<script>window.alert("E-mail or password may be wrong try again.");window.open("welcome.php#loginScreen","_self")</script>';
}
mysqli_close($connenction_link);
	}

}
    }


    
    function viewmyads()
    {
     
	 $connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");



$myfile = fopen("../../admin.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query= "SELECT *FROM `product` ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());


	 
	 mysqli_close($connenction_link);
	    return $result;
    }

  
    function viewcustomer()
    {
         $connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");



$myfile = fopen("../../admin.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query= "SELECT *FROM `customer` ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());


	 
	 mysqli_close($connenction_link);
	    return $result;
    }

} 

?>