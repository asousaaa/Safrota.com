


    <?php	
	
	error_reporting(0);
	$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$id =$_GET["custid"];
	
$value = $_GET["value"];	  
if($_GET["change"] == "Change First Name" ){
	
	 	$select_query= "UPDATE `customer` SET `FirstName`='$value' WHERE CustomerID  = '$id' "; 
		
}
if($_GET["change"] == "Change Last Name" ){
		 	$select_query= "UPDATE `customer` SET `LastName`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Delete this ads" ){
		 	$select_query= "DELETE FROM `customer` WHERE CustomerID  = '$id' "; 
		$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		echo "<script>window.alert(\"Deleted Successfully\");
		window.location.href = \"../../home.php\";
		</script>";
	
	mysqli_close($connenction_link);
	
}
if($_GET["change"] == "Change Billing Address" ){
		 	$select_query= "UPDATE `customer` SET `BillingAddress`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Billing City" ){
		 	$select_query= "UPDATE `customer` SET `BillingCity`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Billing State" ){
		 	$select_query= "UPDATE `customer` SET `BillingState`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Billing Zip" ){
		 	$select_query= "UPDATE `customer` SET `BillingZip`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Shipping Address" ){
		 	$select_query= "UPDATE `customer` SET `ShippingAddress`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Shipping City" ){
		 	$select_query= "UPDATE `customer` SET `ShippingCity`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Shipping State" ){
		 	$select_query= "UPDATE `customer` SET `ShippingState`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Shipping Zip" ){
		 	$select_query= "UPDATE `customer` SET `ShippingZip`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Phone" ){
		 	$select_query= "UPDATE `customer` SET `Phone`='$value' WHERE CustomerID  = '$id' "; 
}
if($_GET["change"] == "Change Password" ){
		 	$select_query= "UPDATE `customer` SET `Password`='$value' WHERE CustomerID  = '$id' "; 
}

	
	$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		
		
		echo "<script>window.alert(\"Changed Successfully\");
		window.location.href = \"accounts.php\";
		</script>";
	
	mysqli_close($connenction_link);
	
?>
 